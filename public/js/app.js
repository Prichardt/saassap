// $("a[href^='#']").click(function(e) {
// 	e.preventDefault();
	
// 	var position = $($(this).attr("href")).offset().top;

// 	$("body, html").animate({
// 		scrollTop: position
// 	} /* speed */ );
// });

// $(document).ready(function(){
//     // Add smooth scrolling to all links
//     $("a").on('click', function(event) {
  
//       // Make sure this.hash has a value before overriding default behavior
//       if (this.hash !== "") {
//         // Prevent default anchor click behavior
//         event.preventDefault();
  
//         // Store hash
//         var hash = this.hash;
  
//         // Using jQuery's animate() method to add smooth page scroll
//         // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//         $('html, body').animate({
//           scrollTop: $(hash)
//         }, 800, function(){
     
//           // Add hash (#) to URL when done scrolling (default click behavior)
//           window.location.hash = hash;
//         });
//       } // End if
//     });
//   });

//   $('a[href^="#"]').on('click', function(event) {
//     var target = $(this.getAttribute('href'));
//     if( target.length ) {
//         event.preventDefault();
//         $('html, body').stop().animate({
//             scrollTop: target.offset()
//         }, 1000);
//     }
// });

// $(document).ready(function(){
//     $( "a.mover-services" ).click(function( event ) {
//         event.preventDefault();
//         $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
//     });
// });

const goods = {
    "entranceHall": {
        "chair": 9,
        "clockGrand": 40,
        "entHalTable": 10,
        "halfMoonTable": 10,
        "hatStand": 10,
        "telTablle": 7,
        "washStand": 17
    }    
};

const maincat = document.getElementsByClassName("maincat");
console.log(goods.entranceHall.chair);

const goodsHtml = `
 <li class="list-group-item active">${goods["entranceHall"].name}</li>
`
console.log(goodsHtml);

maincat.innerHTML += goodsHtml;
// const entranceHall = {
//     "chair": 9,
//     "clockGrand": 40,
//     "entHalTable": 10,
//     "halfMoonTable": 10,
//     "hatStand": 10,
//     "telTablle": 7,
//     "washStand": 17
// };


// const lounge = {
//     "1seater": 17,
//     "2seater ": 34,
//     " 3seater": 50,
//     "4seater": 70,
//     "C.D.Stand": 3,
//     " Chair": 7,
//     " DSTVDish": 5,
//     "DSTV,DVD,VCR": 1,
//     "Hi-Fi": 5,
//     "Hi-FiSpeakersL": 5,
//     "Hi-FiSpeakersS": 1,
//     "Hi-FiStand": 17,
//     " Lamp:Large": 7,
//     "Lamp:Small": 3,
//     "Organ": 5,
//     "Ottoman": 5,
//     "Piano:Grand": 70,
//     "Piano:Upright": 85,
//     "ShowCase": 38,
//     " T.V".: 4,
//     "T.V.:Big Screen": 40,
//     "T.V.:Plasma": 2,
//     "Table:Coffee": 8,
//     "Table:Side": 4,
//     "TV UnitM": 17,
//     "WallUnit(1pc)": 34,
//     "WallUnit (2pc)": 70,
//     "WallUnit3pc": 100,
// }

// const diningRoom = {
//     "Cabinet L": 34,
//     "Cabinet M": 17,
//     "D/Room Chair": 10,
//     "D/Table (10 seater)": 65,
//     "D/Table (4 seater)": 17,
//     "D/Table (6 seater)": 35,
//     "D/Table (8 seater)": 50,
//     "Hostess": 10,
//     "Server": 25,
//     "Sideboard": 34,
//     "Tea Trolley": 14,
//     "Welshdresser": 50,
// }

const familyRoom = {
    "Bar Counter": 35,
    "Bar Stool": 5,
    "Bar Unit L": 100,
    "Bookcase L": 26,
    "Bookcase M": 12,
    "Bookcase S": 7,
    "Cabinet S": 10,
    "Coffee Table": 9,
    "Side Tables": 4,
}

const studyOrOffice = {
    "Cabinet (2 Draw)": 9,
    "Cabinet (4 Draw)": 17,
    "Carpets": 3,
    "Computers": 5,
    "Credenza": 17,
    "Desk L": 35,
    "Desk M": 25,
    "Desk S": 17,
    "Drawing Board": 50,
    "Office Chair": 12,
    "Pillars": 5,
}
const bedroom = {
    "Bed (Double)": 35,
    "Bed (Queen)": 41,
    "Bed (Single)": 17,
    "Bed (Sleeper Couch)": 50,
    "Chaise Lounge": 34,
    "Chest of Drawers": 20,
    "Cheval Mirror": 17,
    "Clothes Basket": 3,
    "Cot / Compactum": 34,
    "Dres Table (L)": 41,
    "Dres Table (M)": 31,
    "Dumb Valet": 3,
    "Exercise Bicycle": 17,
    "Futon (Double)": 35,
    "Futon (Single)": 19,
    "Gym - ALL in One": 100,
    "Headboard": 3,
    "Health Walker": 10,
    "Kist": 17,
    'Pedestals': 7,
    "T.V.": 4,
    "Treadmil": 25,
    "Wardrobe (2 Door)": 35,
    "Wardrobe (3 Door)": 50,
}

// const kitchenandApplience = {
//     "Bar Fridge": 9,
//     "Cabinet S": 10,
//     "Chair": 9,
//     "Clothes Airer": 3,
//     "Dishwasher": 17,
//     "Fans": 5,
//     "Freezer": 25,
//     "Fridge": 25,
//     'Heaters': 4,
//     "Ironing Board": 2,
//     "Knitting Machine": 3,
//     "Microwave Oven": 6,
//     "Polisher": 5,
//     "Sewing Machine": 3,
//     "Stove (L)": 25,
//     "Table": 17,
//     "Tumble Drier": 17,
//     "V-Cleaner": 5,
//     "Veggie Rack": 4,
//     "Washing Machine": 17,
// }

const garageAndGarden = {
    "Bicycle": 5,
    "Bin": 5,
    "Bird Cage": 17,
    "Birdbath": 2,
    "Braai – Gas": 34,
    "Braai – Webber": 17,
    "Chair (Stack)": 3,
    "Concrete Bench": 17,
    "Cooler Box": 5,
    "Fishing Rods": 1,
    "Garden Bench": 17,
    "Garden Ornaments": 5,
    "Garden Statues": 11,
    "Garden Table-Wood": 35,
    "Garden Tools": 1,
    "Golf Bag/Cart": 9,
    "Hose Pipe": 1,
    "Kennel L": 50,
    "Kennel M": 35,
    "Ladder": 5,
    "Lathe / Saw Bench": 38,
    "Lawn Mower": 17,
    "Lounger": 5,
    "Steel Shelves": 35,
    "Suitcase": 5,
    "Table (Plastic)": 3,
    "Toolbox": 3,
    "Trunks": 10,
    "Umbrella": 12,
}

const miscelleneous = {
    "Bean Bag": 3,
    "Canoe": 35,
    "Children Chair": 3,
    "Children Table": 5,
    "Fish Tank": 20,
    "Jungle Gym": 150,
    "Motor Bike (cc)": 100,
    "Prams": 7,
    "Safes": 5,
    "Sandpit": 6,
    "Snooker Table (1/2)": 100,
    "Snooker Table (1/4)": 75,
    "Snooker Table (FS)": 150,
    "Wendy House": 100,
    "Carpets": 3,
    "Mirrors": 1,
    "Ornaments": 1,
    "Paintings": 1,
    "Pictures": 1,
    "Pot Plant Stands": 9,
    "Pot Plants (L)": 50,
    "Pot Plants (M)": 35,
    "Pot Plants (S)": 17,
    "Crockery Boxes": 5,
    "General Boxes": 5,
    "Linen Boxes": 10,
    "W/Drobe Boxes": 10,
}

function showDiv(name, main){
    const element = document.getElementById(name);
    if(element.classList.contains("hide-div")){
        $("#"+name).removeClass("hide-div");
        $("#"+name).addClass("show-div");  
        $("#"+main).addClass("active-main");
    }else{
        $("#"+main).removeClass("active-main");
        $("#"+name).addClass("hide-div");
        $("#"+name).removeClass("show-div");
    }

}


