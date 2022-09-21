// e learned all arithmetic operations, including relativity
// division, and everything in mathematics, and with God's help,
// we will complete the language within a few days
// =====tree code for javascript========
// var -- let -- const -- variables.push -- function -- opject -- pop && shift -- switch -- if | else --
// typeof -- map -- filter -- JSON.parse && JSON.stringify -- search() -- slice() -- remove() --     
// ==	عملية المساواة (Equal)
// !=	عملية اللامساواة (Not Equal)
// >	عملية الأكبر من (Greater than)
// <	عملية الأصغر من (Less than)
// >=	الأكبر من أو يساوي  (Greater than or equal to)
// <=	الأصغر من أو يساوي (Less than or equal to)
//
//       
//              
//
// ========================= var ===============================
//var لا يمكن الوصول إليها عبر نطاقات الوظائف
//var يمكن الوصول إليها عبر الكتل وليس عبر الوظائف 
//  ========================= const ============================
//
console.log("welcom for learn javascript");
var room = 800 / 10;
console.log(room);
var b = 10;
console.log(b);
var  room = 8 * 6;
console.log(room);
var tor = 6.5 / 32.7;
console.log(tor);
var mysection;
mysection = 21 % 9;
console.log(mysection);
var e = 10;
e /= 5;
console.log(e);
w = 50;
w -= 10;
console.log(w);
var myvenom = 110;
console.log(myvenom);
var myvenom = 110;
console.log(myvenom);
var myvenom = "titanic";
console.log(myvenom);
var section_js = "for by for";
section_js += "drop down";
console.log(section_js);
var section_js = "for by for";
section_js += "drop down" + section_js +  "pfigdfp";
console.log(section_js);
var room = 10.10;
var room2 = 5.9;
fixed = room / room2;
console.log(fixed);
var red = "947";
tro = red[0];
console.log(tro);
var myconsole = "im here";
myconsole = "oop";
console.log(myconsole);

var lastname = "forkets";
var usb = lastname[lastname.length - 4 ];
console.log(usb);
var lose = lastname[lastname.length = 6];
console.log(lose);

if (3==3){
   var jumb = "hello " + lastname + myconsole;
}
console.log(jumb);
var ourarray = ["venom",4];
var myarray = ["quick",1];
console.log(ourarray);
var room_1 =  [100,200,300];
room_1[0] = 200;
console.log(room_1);
var cori  = [[5,10,293.4], [3,5,13,49], [,1,8,9], [,7,2,14,4,2,1,4],];
var ram  = cori[0][2];
console.log(ram);
var textjs  = [["room",59],["day",10]];
textjs.push(["fish",89]);
console.log(textjs);
var work = [39,2,6,3];
var remove = work.pop();//variables.pop remove first
console.log(work); 
var work = [39,2,6,3];
var remove = work.shift(); //variables.shift remove last
console.log(work);  
const tree =  ["you","dog","bin"];
tree.shift();
tree.unshift("cat");
console.log(tree);
listshoping  = [["milk1",10],["milk2"],15];
   function recoiredfunction() { // code function
    console.log("welcom back im venom");
}
    recoiredfunction()
   function codedividingfunction(a,b) {
    console.log(a / b);
}
    codedividingfunction(30,15)
   function codehitfunction(a,z) {
    console.log(a * z);
   }
    codehitfunction(100,100)

   function codeplusfun(last_number,first_number) {
   console.log(last_number + first_number);
   }
   codeplusfun(50,50) 

         function codeplusfun(one_num) {
         console.log(one_num * one_num);
   } 
         codeplusfun(5)
    var rook = "head";
    function mycar() {
      var rook = "body";
      return  rook;
    }
    console.log(mycar());
    console.log(rook);
     function plus(number) {
      return number - 15.9;
    }
     console. log(plus(20,2));  
     function text_line(array,items) {
         array.push(items);
         return array.shift();
    }
 
     var textarr = [0,1,2,3,4,5,6,];
     console.log("after:" + JSON.stringify(textarr));
     console.log(text_line(textarr,9));
     console.log("before:" + JSON.stringify(textarr));
     var ram  = textarr[1];
     var opo = ("return : " + ram + JSON.stringify(textarr));
     console.log(opo);

     // ================= //
     function treetruee(forbyfor) {
      if (forbyfor == 10){
         return "yeah is true";
      }
         return "false";
     }
     console.log(treetruee(10));

     function torecho(vortex) {
      if (vortex < 9.6) {
        return "less than 5";
      } else if (vortex < 15.9 ) {
         return "less than 10";
      } else if (vortex < 20.3) {
         return "less than 20.3";
      } else if (vortex > 25.4 ) {
         return "less than 25.4";  
      }
      }
      console.log(torecho(16.4));

      var word  = ["rook","tree","eggs","home","about"];
      function listword(onenum,townum) {
       if (listword == 1)  {
         return word[0]
       } else if (townum == onenum - 1) {
         return word[1]
       } else if (townum == onenum - 2) {
         return word[2]
       } else if (townum >= onenum + 1) {
         return word[3]
       } else if (townum == onenum + 2) {
         return word[4]
       } else if (townum >= onenum - 1) {
         return word[5]
       }
    }
      console.log(listword(1,1));
      let txt = "I can eat bananas all day";
      let x = txt.slice(10,17);

      function roomone(volt) {
        var answer = "";
        switch(volt) {
          case 1:
             answer += "albom";
            break;
          case 2:
             answer = "sor";
           break;
          case 3: 
             answer = "dor";
           break;
          case 3:
            answer = "dor";
           break;
          // default:
          //   error = "no word";
          //  break;
        }
         return answer;
      }
      console.log(roomone(1));

      function roomtow(vip) {
          var message = "";
          switch(vip) {
            case 1:
            case 2:
            case 3:
                 message = "yes here number 1-3";
                 break;
            case 4:
            case 5:
            case 6:
                 return "yes number 1-6";
            // message = "yes here number 4-6";
                break;   
            default:
                message = "no info";
                break;
          }
            return message;    
      }
      console.log(roomtow(4));

      // ======objects======= //
      var testopject = {
         "hot": "bold",
         "shop": "jery",
         "look": "uet",
         
      };
      var hit = testopject["shop"]; //[""] يصبح عن طريق الاقواس ايضا 
      var shop = testopject.shop;
      console.log(hit);

      var testopject = {
        "16": "bold",
        "shop": "jery",      
        "the look": "uet",     
     };
      delete testopject.shop;
      var playernumber = 16;
      var playe = testopject[playernumber];
      console.log([testopject]);

      var option = {
        man: "woman",
        black: "white",
        fast: "slow",
        large: "small",
      };
   // your code Here
   var searchmydata = option.man;
   console.log(searchmydata);

   typeof "jon" + "<br>" +
   typeof 801 + "<br>" +
   typeof true + "<br>" +
   typeof false + "<br>" +
   console.log(typeof(false))

   const dataclock = new Date();
   dataclock.setFullYear(2021,13,20);
   console.log(dataclock);

   var rookarr = [];
   for (let a = 0; a < 5; a++) {
      rookarr.push(a);
  }

  let rendom = Math.floor(Math.random() * -10) + 1;
  console.log(rendom);

  var random00 = [];
     var r = 0
     while (r <= 5) {
       random00.push(r);
       r++;
  } 
  console.log(random00);

  var myrand = [];
  for (var d = 10; d >= 0; d -= 2.5) {
      myrand.push(d);
  }
   console.log(myrand);

   var mynum = [];
   for (var o = 9; o > 0; o -= 3) {
       mynum.push(o);
   }
   console.log(mynum);

   var opel = [5,5,5,5];
   var titleopel = 30;

   for (var u = 0; u < opel.length; u++) {
       titleopel += opel[u];
   }
   console.log(titleopel);
  
   var number = [100,200,300];
   var num = 0;
   for (var n = 0; n < number.length; n++) {
       num += number[n];
   }
   console.log(num);

   const mycori = ["black","white","pinke","green","red"];
   console.log(mycori[4][0]); // In the first option, specify the word number, and in the second option, specify the letter of the chosen word
   mycori[3] = "war"; // here add word for the number determinant
   let stylecolor = mycori.pop() + mycori.shift(); // remove last word and first word
   console.log(stylecolor);
   console.log(mycori);

   const hero =  [
    {
       namo: "ali",
       ago: 18,
       from: "baghdad",
       cars: {
        storm: "hero1",
        storm2: "hero2",
        storm3: "hero3",
       } 
      },
      {
        namo: "abbas",
        ago: 53,
        from: "baghdad city chest",
        cars: {
         storm: "hero1",
         storm2: "hero2",
         storm3: "hero3",
        } 
       }
    ]
    var  jsontor = JSON.stringify(hero,"D"); // JSON.stringify
    console.log(JSON.parse(jsontor));   // JSON.parse 

    const numberr = num => num * 20;
    console.log(numberr(10));

    let g = 0;
    while (g <= 2) {
       console.log(g);
       g++;
    }
    const people = [
        {
          name_person: "hussein",
          from: "baghded",
          ago_person: 40
        },
        {
          name_person: "hussein",
          from: "baghded",
          ago_person: 55
        },
      ];
      for (let per of people) {
           console.log(per.ago_person);
      }
      people.forEach(person => console.log(person.ago_person));
      const personage55 = people.filter(person => person.ago_person < 55);
      console.log(personage55);

      var coo  = 'A' < 'a';
      console.log(coo);

      //single element selectors Model
      const items = document.querySelector('#tor');
      console.log(items);
      // Mulituple element selectorAll
      const listsitem = document.querySelectorAll('.script');
      console.log(listsitem);
      // remove for element
       items.lastElementChild.remove();
      // add word
      items.firstElementChild.innerHTML = "<h2 >VENOM</h2>"
      items.firstElementChild.style.color = '#d2d2d2';

      console.log(this === window); // this

      mygvar = 100;
      console.log(window.mygvar);
      console.log(this.mygvar);

      const text02 = "hello lm venom";
      const text03 = text02.search(/venom/); // search()
      console.log(text03);

      const text04 = "hello lm venom";
      const text05 = text02.slice(7,10); // slice() 
      console.log(text05);
      // arrow function
      fight = function() {
        console.log('RIGHT');
      }
      fight();

      fight = () => {
        console.log('LEFT');
      }
      fight();

      const ffvvf = function() {
        console.log("freeoop");
      }
      ffvvf();

      let oper = () => {
        console.log('welcom');
      }
      oper();
      // close

      function randomnumber() {
        console.log("HELLO IM VENOM");   
        while (randomnumber < 4){
           alert(randomnumber); // ينفذ ما دام الشرط متكرر 
           randomnumber++;
      } 
      }
      randomnumber();

      document.getElementsByClassName("E")[3].style.color = "red";
   
       var t = 6.9;
       var tu = t.toFixed();
       console.log(tu); 

       let y78 = 600000;
       let j90 = y78.toLocaleString();
       console.log(j90);

       let e74 = 600000;
       let w44 = e74.toLocaleString("en-US",{style:"currency",
       currency:"USD"});
       console.log(w44);

      let tor50 = 600000;
      let rot40 = tor50.toLocaleString("en-US",{style:"currency",
      currency:"USD"});
      console.log(w44);
      
       const fruits = ["Banana", "Orange", "Apple", "Mango"];
       let keys = fruits.keys();
       let text = "";
       for (let x of keys) {
       text += x;
       }
      console.log(text);

      const numword = [1,2,3,4,5,6,7];
      let nuk = numword.keys();
      let linere = ["groo","ioi","iys"];
      for (nuk of linere) {
          nuk + linere;
      }
      console.log(linere);
      // let y = window.prompt("you login ?"); // input prompt
      // console.log(y);
      // if (y) {
      //    console.log("true");
      // }else {
      //   console.log("false");
      // } 

      // function addopen() {
      //       window.open("https://docs.emmet.io/cheat-sheet/?utm_source=toolkit.addy.codes","","width=100.,height=100");
      // }
      // addopen()
      // var bt = window.confirm("where are you ?");
      // console.log(bt);
      
      let reel;
      function open_window() {
        reel = window.open("https://www.youtube.com","","width=400.,height=400");
      }
      function close_window() {
        reel.close();
      }
      document.querySelector(".open").addEventListener("click",open_window)
      document.querySelector(".close").addEventListener("click",close_window)

       // The value matches, regardless of type
	    if (10.3 == "10.3") {
        console.log(true);

      }else{
        console.log(false);
      }
      // not string 
      if (50 === '50') {
        console.log("true");

    }else {
      console.log("false");
    }

    var g5 = 1;
    var h5 = 7;
    
    g5 &&= 9;
    h5 &&= 9;
    console.log(g5,h5);
	
	
	
	
	

   // @AlRmuthya
