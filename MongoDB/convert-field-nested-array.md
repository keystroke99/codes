# Mongodb : How to convert a field inside a nested array of object
https://mongoplayground.net/p/z6JPJwy-I9N
#Data
 ```
 [
  {
    _id: 1,
    quizzes: [
      {
        _id: 1,
        question: "bla bla 1"
      },
      {
        _id: 2,
        question: "bla bla 2"
      }
    ]
  },
  {
    _id: 2,
    quizzes: [
      {
        _id: 1,
        question: "bla bla 1"
      }
    ]
  }
]
 ```
 
 # Query
 ```
 db.collection.aggregate([
  {
    $addFields: {
      _id: {
        $toString: "$_id"
      },
      quizzes: {
        $map: {
          input: "$quizzes",
          in: {
            _id: {
              $toString: "$$this._id"
            },
            question: "$$this.question"
          }
        }
      }
    }
  }
])
 ```
