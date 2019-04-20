apiURL = "http://192.168.31.207/library/"

var App = Vue.extend({});

var copyId="61";
var booklist="";
var typelist="";
var flag_view="0";
 
var bookList = Vue.extend({
    template: '#book-list-template',

    data: function() {
        return {
           books:'',
            book:'',
            copy:'',       
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
       
        	   if( flag_view=="0"){
        		   this.$http.get(apiURL+"api/books", function(books){
        			   booklist = books
                       this.$set('books',books);
                       flag_view="1";
                     // console.log(books);
                     // console.log("OK");
                   }),
                   this.$http.get(apiURL+"api/types", function(types){
                	   typelist = types
                       this.$set('types',types);
                       //console.log(types);
                   })
        		   
        	   }else{
        		   this.$set('books',booklist);
        		   this.$set('types',typelist);
        		   
        	   }
        	  
        
        

        }

    }
})

var homePage = Vue.extend({
    template: '#home-template',

    data: function(){
        return {
        
        }
    },

    ready: function(){
       
    }

  
})

var test = Vue.extend({
    template: '#test-template',

    data: function(){
        return {
        
        }
    },

    ready: function(){
       
    }

  
})


 var singleBook = Vue.extend({
    template: '#single-book-template',

    data: function(){
        return {
            book:'',
            loading: false,
            comments:''
        }
    },

    ready: function(){
    	
        this.getTheBook();
    },

    methods: {
        getTheBook: function(){
            //this.$set('books',"");
            this.$http.get(apiURL+"api/books" + "/" + this.$route.params.bookId, function(book){
                this.$set('book',book);
              

               //console.log(book);
            }),

             this.$http.get(apiURL+"api/comments" + "/" + this.$route.params.bookId, function(comments){
                this.$set('comments',comments);
              

               //console.log(book);
            })
        }
    }
})

var singleCopy = Vue.extend({
    template: '#single-copy-template',

    data: function(){
        return {
            copy:'',
        
            loading: false
        }
    },

    ready: function(){
        this.getTheCopy();
    },

    methods: {
        getTheCopy: function(){
            //this.$set('books',"");
        	//alert(this.$route.params.copyId);
        	
        	
            this.$http.get(apiURL+"api/copy/" +copyId, function(copy){
                this.$set('copy',copy);
              

               //console.log(copy);
            })
        }
    }
})

var createRecord = Vue.extend({
    template: '#create-record-template',

    data: function(){
        return {
          
        }
    },

    ready: function(){
      // this.createTheRecord();
    },

    http:{
        headers:{
            'Accept' : 'json',
            'Content-Type' : 'application/hal+json',
            'Authorization' : 'Basic YWRtaW46Z2NyYw=='
        }
    },
    
    methods: {
        createTheRecord: function(){
        	
        	var data = {
        			'_links':{
        				'type':{
        					'href': apiURL + 'rest/type/node/jieshujilu'
        				}
        			},
        			"title": [
						{
						"value": "HUANGJING_SHENGJIE-A"
						}
						],
        			"field_jieshuren": [
						{
						"value": "HUANGJIANG"
						}
					],
					"field_jieshuriqi": [
						{
						"value": "2016-07-19"
						}
						],
					"field_jiezhihaishuriqi": [
						{
						"value": "2016-08-18"
						}
						],
					
					"field_tu": [
						{
						"target_id": "61"
					
						}
						]
				
        	}
        	  this.$http.post(apiURL+"entity/node",data);         
           
        }
    }
})



var router = new VueRouter();

router.map({
	 '/':{
	      name:'home',
	        component: homePage
	    },
    '/books':{
        name:'books',
        component: bookList
    },
    '/book/:bookId':{
        name:'book',
        component: singleBook
    },
    '/copy':{
        name:'copy',
        component: singleCopy
    },
    '/create':{
    	name:'create',
        component: createRecord
    },
    '/test':{
    	name:'test',
        component: test
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


function scan()
{
    /*
	cordova.plugins.barcodeScanner.scan(
        function (result) {
            if(!result.cancelled)
            {
                if(result.format == "QR_CODE")
                {
                    navigator.notification.prompt("Please enter name of data",  function(input){
                        var name = input.input1;
                        var value = result.text;

                        var data = localStorage.getItem("LocalData");
                        console.log(data);
                        data = JSON.parse(data);
                        data[data.length] = [name, value];

                        localStorage.setItem("LocalData", JSON.stringify(data));

                        alert("Done");
                    });
                }
            }
        },
        function (error) {
            alert("Scanning failed: " + error);
        }
   );
    
    */
	
	
	
	
	

    cordova.plugins.barcodeScanner.scan(
    	      function (result) {
    	    	  /*
    	          alert("We got a barcode\n" +
    	                "Result: " + result.text + "\n" +
    	                "Format: " + result.format + "\n" +
    	                "Cancelled: " + result.cancelled);
    	          */
    	          if(result.cancelled == true){
    	        	router.go({ name: 'home'});
    	        	
    	          }
    	          
    	        copyId = result.text;
    	      	router.go({ name: 'copy'});
    	      	
    	      }, 
    	      function (error) {
    	          alert("Scanning failed: " + error);
    	      },
    	      {
    	          "preferFrontCamera" : true, // iOS and Android
    	          "showFlipCameraButton" : true, // iOS and Android
    	          "prompt" : "Place a barcode inside the scan area", // supported on Android only
    	          "formats" : "QR_CODE,PDF_417", // default: all but PDF_417 and RSS_EXPANDED
    	          "orientation" : "portrait" // Android only (portrait|landscape), default unset so it rotates with the device
    	      }
    	   );
    	   
   
}

function sync(){
	flag_view = "0";
 	
}