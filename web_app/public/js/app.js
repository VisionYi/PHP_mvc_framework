var app = angular.module('HomeApp',[]);

app.controller('TeamCtrl', function(){
    this.title = "Our Team Member";
    this.modalTitle ="個 人 介 紹";
    this.members = group;
});
app.controller('PictureCtrl', function(){
    this.title = "Our Work Picture";
    this.more = "View More Items";
    this.images = pictures;
});

var pictures = [
    "http://lorempixel.com/950/600/business/1",
    "http://lorempixel.com/950/600/business/2",
    "http://lorempixel.com/950/600/business/3",
    "http://lorempixel.com/950/600/business/3",
    "http://lorempixel.com/950/600/business/4"
];

var group =
[{
    "name"  : "王XX",
    "class" : "四子三丙",
    "number": "110",
    "text": {
        "content": "這是內容1"
    },
    "images": {
        "profile_picture":"http://lorempixel.com/600/750/people/1"
    }
},
{
    "name"  : "洪XX",
    "class" : "四子三丙",
    "number": "111",
    "text": {
        "content": "這是內容2"
    },
    "images": {
        "profile_picture":"http://lorempixel.com/600/750/people/2"
    }
},
{
    "name"  : "郭XX",
    "class" : "四子三丙",
    "number": "112",
    "text": {
        "content": "這是內容3"
    },
    "images": {
        "profile_picture":"http://lorempixel.com/600/750/people/3"
    }
},
{
    "name"  : "陳XX",
    "class" : "四子三丙",
    "number": "113",
    "text": {
        "content": "這是內容4"
    },
    "images": {
        "profile_picture":"http://lorempixel.com/600/750/people/4"
    }
},
{
    "name"  : "張XX",
    "class" : "四子三丙",
    "number": "114",
    "text": {
        "content": "這是內容5"
    },
    "images": {
        "profile_picture":"http://lorempixel.com/600/750/people/5"
    }
},
{
    "name"  : "林XX",
    "class" : "四子三丙",
    "number": "115",
    "text": {
        "content": "這是內容6"
    },
    "images": {
        "profile_picture":"http://lorempixel.com/600/750/people/6"
    }
}];
