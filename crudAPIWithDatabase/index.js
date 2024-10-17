const mongoose = require("mongoose");
const courses = require("./routes/courses");
const express = require("express");
const app = express();


// --------------------------------- Connect To MongoDB Database ---------------------------------------//
//Make a cluster on https://cloud.mongodb.com/
// Get the connection string from the cluster and paste it here, raplace <db_password> with actual password 
// After / name of the database which we want to create in this case it is playground

mongoose
  .connect(
    "mongodb+srv://TalhaKamal:2001120801@cluster0.n3ocfjl.mongodb.net/playground?retryWrites=true&w=majority&appName=Cluster0" 
  )
  .then(() => console.log("Connected to MongoDB Atlas..."))
  .catch((err) => console.error("Could not connect to MongoDB Atlas...", err));
// --------------------------------- Connect To MongoDB Database --------------------------------------//



// --------------------------------- API End Points or Routes -----------------------------------------//
app.use("/api/courses", courses);
// -------------------------------- API End Points or Routes -----------------------------------------//

// -------------------------------------------- Listining On Port -----------------------------------------//
const port = process.env.PORT || 3001;
app.listen(port, () => console.log(`Listening on port ${port}`));

// -------------------------------------------- Listining On Port -----------------------------------------//
