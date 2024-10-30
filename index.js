const express = require("express");
const app = express();

app.set("view engine", "php");
app.use(express.static("public"));