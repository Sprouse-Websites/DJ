function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false; }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function(e) {
        closeAllLists(e.target);
    });
}

/*An array containing all the song names in the library:*/
var songs = [
    "A+E (feat. Kandaka Moore & Nikki Cislyn)",
    "Alarm",
    "All Day and Night",
    "All I Am",
    "Alone",
    "Animals (UK Radio Edit)",
    "Antisocial",
    "Babooshka",
    "Baby",
    "Back & Forth",
    "Beautiful People (feat. Khalid)",
    "Beneath Your Beautiful",
    "Best Song Ever",
    "Better When You're Gone",
    "Bibia Be Ye Ye",
    "Birch(feat.Eliza Shaddad)",
    "Blame(feat.John Newman)",
    "Blame It on Me",
    "Bloodsteam",
    "born to die",
    "Breathe(feat.Ina Wroldsen)",
    "Budapest",
    "Came Here",
    "for Love",
    "Castle on the Hill",
    "Castles",
    "Children(Full Length)",
    "Ciao Adiós",
    "Close My Eyes",
    "Closer(feat.Halsey)",
    "Clown",
    "Cologne(feat.Nikki Cislyn & Javeon)",
    "Come Over(feat.Stylo G)",
    "Daddy",
    "Dancing with a Stranger",
    "Dog Days Are Over",
    "Don't",
    "Don't Be So Hard On Yourself",
    "Don't Call Me Up",
    "Don't Leave Me Alone (feat. Anne-Marie)",
    "Don't Let Me Down (feat. Daya)",
    "Don’t Feel Like Crying",
    "Drag You Down",
    "Dust Clears (feat.Noonie Bao)",
    "Easy Love",
    "Electricity (feat.Diplo & Mark Ronson)",
    "Empty Space",
    "Extraordinary (feat.Sharna Bass)",
    "Faded",
    "Feel It Still",
    "Feel So Close (Radio Edit)",
    "Firefly",
    "Flames",
    "FRIENDS",
    "Galway Girl",
    "Gecko (Overdrive)[Radio Edit]",
    "Giant",
    "Give Me Your Love (feat.John Newman & Nile Rodgers)",
    "Glorious",
    "Going Up",
    "The Good Samaritan",
    "Harder",
    "Heart On Fire (feat.Elisabeth Troy)",
    "Heaven (Avicii)",
    "Heaven (Emeli Sande)",
    "Here",
    "Here With Me (feat.CHVRCHES)",
    "Hey Brother",
    "Hide & Seek (feat.Joe Housley)",
    "High Hopes",
    "Higher Love",
    "Hold Me While You Wait",
    "Hold My Girl",
    "Hold My Hand",
    "Hold The Line (feat.A R I Z O N A)",
    "Homeless",
    "Hope",
    "How Deep Is Your Love",
    "Human",
    "I Could Be the One (Nicktim Radio Edit)",
    "I Don't Care",
    "I Miss You",
    "I Need Your Love (feat.Ellie Goulding)",
    "I Put Your Records On",
    "I'll Be There",
    "Imagine",
    "In My Mind",
    "In the Name of Love",
    "Insomnia",
    "It Will Not Be Forgotten",
    "Just Got Paid (feat.French Montana)",
    "Just You and I",
    "Kissing You Goodbye",
    "Ladbroke Grove",
    "Leave a Light On",
    "Let It Out",
    "Lifetime",
    "Little Bird",
    "Lonely Together(feat.Rita Ora)",
    "Lost Without You",
    "Love You More",
    "Lullaby",
    "Mad Love",
    "Mama Do(uh oh uh oh)",
    "Maybe",
    "Mountains",
    "Mozart's House (feat. Love Ssega)",
    "My Kind of Love",
    "My Love (feat. Jess Glynne)",
    "My Way",
    "Nancy Mulligan",
    "New Eyes (feat.Lizzo)",
    "Next to Me",
    "The Nights",
    "No One",
    "No Roots",
    "Old Town Road( feat.Billy Ray Cyrus)[Remix]",
    "One Night",
    "One Touch",
    "Outro Movement III",
    "Outside (feat. Ellie Goulding)",
    "Overdrive",
    "Paradise",
    "Paris",
    "Perfect",
    "Perfect Duet",
    "Perfect Fusión",
    "Perfect Symphony",
    "Photograph",
    "Piece Of Your Heart",
    "Piece of Your Heart (James Hype Remix)",
    "Play",
    "Polaroid",
    "Post Malone(feat.RANI)",
    "Rather Be(feat.Jess Glynne)",
    "Read All About It, Pt.III",
    "Real Love",
    "Ride It",
    "Rise(feat.Jack & Jack)",
    "Ritual",
    "River",
    "Rockabye",
    "Rockabye(feat.Sean Paul)",
    "Roses(feat.ROZES)",
    "Runaway(U & I)",
    "Scared to Be Lonely",
    "Señorita",
    "Shape of You",
    "Shotgun",
    "Should've Known Better (feat. Anne-Marie)",
    "Sing",
    "Skinny Love",
    "Sofa",
    "Solo",
    "Someone You Loved",
    "Something Just Like This",
    "Sorry",
    "SOS(feat.Aloe Blacc)",
    "Space & Time",
    "Stay (Alessia Cara)",
    "Stay (Don't Go Away) [feat. Raye]",
    "Still Falling for You",
    "Stronger",
    "Sucker",
    "Summer",
    "summertime sadness",
    "Supermarket Flowers",
    "Sweet Lovin' (feat. Bryn Christopher) [Radio Edit]",
    "Sweet Nothing(feat.Florence Welch)",
    "Symphony",
    "Take Me Back to London(feat.Stormzy)",
    "Telephone Banking(feat.Love Ssega)",
    "#thatPOWER(feat.Justin Bieber)",
    "These Days",
    "Thing For You",
    "Thinking About You(feat.Ayah Marar)",
    "Thinking Out Loud",
    "This Is What You Came For(feat.Rihanna)",
    "Thunder",
    "Thunderclouds(feat.Sia, Diplo & Labrinth)",
    "Titanium(feat.Sia)",
    "Turn Me On(feat.Vula)",
    "Under Control(feat.Hurts)",
    "Up Again(feat.Rae Morris)",
    "video games",
    "Waiting For Love",
    "Walk Me Home",
    "We Are Stars",
    "We Found Love(feat.Calvin Harris)",
    "We Got That Cool(feat.Afrojack & Icona Pop)",
    "We'll Be Coming Back (feat. Example)",
    "What Do I Know",
    "What I Like About You(feat.Theresa Rex)",
    "When Love Takes Over(feat.Kelly Rowland)",
    "Where I Sleep",
    "Wish You Well",
    "Without You(feat.Usher)",
    "Wonder Wuthering Heights[New Vocal]",
    "You Don't Know Me (feat. RAYE)",
    "You'll Be Mine",
    "You've Got the Love",
    "Youngblood",
    "3 Nights",
    "123",
    "2002",
];


/*initiate the autocomplete function on the "myInput" element, and pass along the songs array as possible autocomplete values:*/
autocomplete(document.getElementById("filterbox"), songs);
