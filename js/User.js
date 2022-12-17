class User {
    constructor(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
    }

    static fromJSON(filename) {
        // var userObj = new User("Wujek", "Macius");

        // fetch(filename)
        // .then(content => {
        //     return content.json();
        // })
        // .then(user => {
        //     // console.log(user)
        //     userObj = new User(user.firstName, user.lastName);
        //     return userObj;
        // })

        // return userObj;

        var obj = require(filename);
        return new User(obj.firstName, obj.lastName);
    }

    static toJSON(user) {
        return JSON.stringify(user);
    }
}

module.exports = User;