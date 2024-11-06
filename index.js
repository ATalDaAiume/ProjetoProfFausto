const express = require("express");
const app = express();

app.set("view engine", "php");
app.use(express.static("public"));

app.get("/", (req, res) => {
    res.render("home");
});

app.get("/pg2", (req, res) => {
    res.render("pg2");
});

app.listen(3030, (req, res) => {
    console.log("Server on");
});