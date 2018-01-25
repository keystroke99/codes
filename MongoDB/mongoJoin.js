var express = require('express');
var router = express.Router();
var passport = require('passport');
var LocalStrategy = require('passport-local').Strategy;
var ObjectId = require('mongodb').ObjectID;

var User = require('../models/user');
router.get('/app', function(req, res, err) {
    var $User;
   User.aggregate([
    {
        $lookup: {
           from: "images",
           localField: "username",
           foreignField: "username",
           as: "images"
        }
    },
    /*{
        $unwind: "$images"
    },*/
    {
        $lookup: {
           from: "follwers",
           localField: "username",
           foreignField: "followerId",
           as: "followers"
        }
    },
    /*{
        $unwind: "$followers"
    }*/
    
    

], function (err, result) 
{ if (err) { console.log(err); return; }
  //console.log(result);
  res.send(result) });
});




// Register
router.get('/register', function(req, res, err) {
    res.send(err);
});

// Login
router.get('/loginfail', function(req, res) {
    //console.log(req);
    res.send('email or password are Invalid');
});

router.get('/getUsers', function(req, res) {
    User.find(function(err, users) {
        if (err) return next(err);
        res.json(users);
    });
});


// Register User
router.post('/register', function(req, res) {
    var name = req.body.name;
    var email = req.body.email;
    var username = req.body.username;
    var password = req.body.password;
    var confirmPassword = req.body.confirmPassword;
    var mobileNumber = req.body.mobileNumber;
    var profilePic = req.body.profilePic;
    var location = req.body.location;
    var type = req.body.type;
    var role = req.body.role;
    var loginType = req.body.loginType;
    var gender = req.body.gender;
    var dateOfBirth = req.body.dateOfBirth;
    var address = req.body.address;
    var availableCredits = req.body.availableCredits;
    var profession = req.body.profession;


    // Validation
    req.checkBody('name', 'Name is required').notEmpty();
    req.checkBody('email', 'Email is required').notEmpty();
    req.checkBody('mobileNumber', 'mobileNumber is not valid').notEmpty();
    req.checkBody('username', 'Username is required').notEmpty();
    req.checkBody('password', 'Password is required').notEmpty();
    req.checkBody('confirmPassword', 'Passwords do not match').equals(req.body.password);
    //req.checkBody('profilePic', 'profilePic is required').notEmpty();
    req.checkBody('loginType', 'loginType is required').notEmpty();
    //req.checkBody('location', 'location is required').notEmpty();
    //req.checkBody('gender', 'gender is required').notEmpty();
    //req.checkBody('dateOfBirth', 'dateOfBirth is required').notEmpty();
    //req.checkBody('address', 'address is required').notEmpty();
    //req.checkBody('availableCredits', 'availableCredits is required').notEmpty();
    //req.checkBody('profession', 'profession is required').notEmpty();

    User.findOne({ email }, (err, existingUser) => {
        if (err) { return res.send(err); }

        // If user is not unique, return error
        if (existingUser) {
            if (loginType == "app") {
                return res.send('That email address is already in use.');
            } else {
                //return res.send("/users/login", "post");
                return res.redirect('/login')
            }
        }
        /*User.findOne({ username }, (err, existingUser1) => {
            if (err) { return res.send(err); }

            // If user is not unique, return error
            if (existingUser1) {
                return res.send('That username is already in use.');
            }*/
        User.findOne({ mobileNumber }, (err, existingUser1) => {
            if (err) { return res.send(err); }

            // If user is not unique, return error
            if (existingUser1) {
                return res.send('That mobileNumber is already in use.');
            }

            var errors = req.validationErrors();

            if (errors) {
                res.send({
                    errors: errors
                });
            } else {
                var newUser = new User({
                    name: name,
                    email: email,
                    username: username,
                    password: password,
                    mobileNumber: mobileNumber,
                    type: type,
                    loginType: loginType,
                    profilePic: profilePic,
                    location: location,
                    gender: gender,
                    dateOfBirth: dateOfBirth,
                    address: address,
                    availableCredits: availableCredits,
                    profession: profession,
                });

                User.createUser(newUser, function(err, user) {
                    if (err) {
                        return res.send(err);
                    } else {
                        res.send('registered sucessfully');
                        console.log(user);
                    }

                });


                //req.flash('success_msg', 'You are registered and can now login');

                //res.send('registered sucessfully');
            }
            // });
        });
    });
});

passport.use(new LocalStrategy(
    function(email, password, done) {
        User.getUserByEmail(email, function(err, user) {
            if (err) throw err;
            if (!user) {
                return done(null, false, { message: 'Unknown User' });
            }
           

            User.comparePassword(password, user.password, function(err, isMatch) {
                if (err) throw err;
                if (isMatch) {
                    return done(null, user);
                } else {
                    return done(null, false, { message: 'Invalid password' });
                }
            });
        });
    }));

passport.serializeUser(function(user, done) {
    done(null, user.id);
});

passport.deserializeUser(function(id, done) {
    User.getUserById(id, function(err, user) {
        done(err, user);
    });
});

router.post('/login',
passport.authenticate('local', { failureRedirect: '/users/loginfail', failureFlash: true }),
    function(req, res) {
                             console.log("hello");
        res.send('login sucessfully');
    });

router.post('/logout', function(req, res) {
    var username = req.body.username
    req.logout();
    console.log(username);
    //req.flash('success_msg', 'You are logged out');
    res.send('logout sucessfully');
});

module.exports = router;
