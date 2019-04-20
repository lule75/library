apiURL = "http://192.168.31.207/library/api/"

var App = Vue.extend({});
 
var bookList = Vue.extend({
    template: '#book-list-template',

    data: function() {
        return {
            books:'',
            book:'',
            types:'',
            titleFilter:'',
            typeFilter:''
        }
    },

    ready: function(){
        this.getBooks();
    },

    methods:{
        getBooks: function(){
             this.$set('book',"");
            this.$http.get(apiURL+"books", function(books){
                this.$set('books',books);
               // console.log(books);
            }),
            this.$http.get(apiURL+"types", function(types){
                this.$set('types',types);
                //console.log(types);
            })

        },

        getTheBook: function(bookId){
            this.$set('books',"");
            this.$http.get(apiURL+"books" + "/" + bookId, function(book){
                this.$set('book',book);
               console.log(book);
            })
        }

    }
})

 var singleBook = Vue.extend({
    template: '#single-book-template',

    data: function(){
        return {
            book:'',
            loading: false
        }
    },

    ready: function(){
        this.getTheBook();
    },

    methods: {
        getTheBook: function(){
            this.$set('books',"");
            this.$http.get(apiURL+"books" + "/" + this.$route.params.bookId, function(book){
                this.$set('book',book);
               console.log(book);
            })
        }
    }
})



var router = new VueRouter();

router.map({
    '/':{
        component: bookList
    },
    '/book/:bookId':{
        name:'book',
        component: singleBook
    },
});

router.start(App, '#app');

/*
new Vue({
    el:'#app',

    data:{
       
        names: [
            {firstname:'Will',lastname:'Smith'},
            {firstname:'Lei',lastname:'Guo'},
            {firstname:'Jing',lastname:'Huang'}
        ],

        books:'',
        book:'',
        types:'',
        titleFilter:'',
        typeFilter:''

        
    },

    ready:function(){
        this.getBooks();
    },


    methods:{
        getBooks: function(){
             this.$set('book',"");
            this.$http.get(apiURL+"books", function(books){
                this.$set('books',books);
               // console.log(books);
            }),
            this.$http.get(apiURL+"types", function(types){
                this.$set('types',types);
                //console.log(types);
            })

        },

        getTheBook: function(bookId){
            this.$set('books',"");
            this.$http.get(apiURL+"books" + "/" + bookId, function(book){
                this.$set('book',book);
               console.log(book);
            })
        }

    }

  
})


*/