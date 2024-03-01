const product = [
    {
        id: 0,
        image: 'main_style/images/club1.jpg',
        title: 'MANCHESTER UNITED FC',
        disc:  'Manchester United have won a total 67 trophies during their history; a record 20 League titles, 12 FA Cups, six League Cups, and a record 21 FA Community Shields.',
        cont:  'Phone: 1268162881 <br> Email: manchesterUnited@gmail.com <br> Location on Map: <a href="https://www.google.com/maps/d/viewer?mid=167p_w4yQR7Dj212FS9oxh0AJa9c&hl=en_US&ll=53.463055000000004%2C-2.2913469999999947&z=17">Here</a>',
    },
    {
        id: 1,
        image: 'main_style/images/club2.jpg',
        title: 'BAYERN MUNICH FC',
        disc:  'Bayern is the most successful club in German football history, having won a record 33 national titles, including 11 consecutively since 2013, and 20 national cups, along with numerous European honours.',
        cont:  'Phone: 1268162881 <br> Email: baternMunich@gmail.com <br> Location on Map: <a href="https://www.google.com/maps/d/embed?mid=1pPL-yfBzIvWr4pZmYJIA1_K1jIA&ll=48.19725847588184%2C11.589347682861204&z=13">Here</a>',
    },
    {
        id: 2,
        image: 'main_style/images/club10.jpg',
        title: 'BARCELONA FC',
        disc:  'Barcelona has won a record 77 trophies: 27 La Liga, 31 Copa del Rey, 14 Supercopa de España, three Copa Eva Duarte, and two Copa de la Liga titles',
        cont:  'Phone: 1268162881 <br> Email: Barcelona@gmail.com <br> Location on Map: <a href="https://www.google.com/maps/d/viewer?mid=1sTTs0c3Jh67cDhyZ36WjRl3xBzw&hl=en_US&ll=41.381721225215266%2C2.1191721957398&z=14">Here</a>',
    },
    {
        id: 3,
        image: 'main_style/images/club4.jpg',
        title: 'REAL MADRID C.F.',
        disc:  'In domestic football, the club has won 69 trophies; a record 35 La Liga titles, 20 Copa del Rey, 12 Supercopa de España, a Copa Eva Duarte, and a Copa de la Liga.',
        cont:  'Phone: 1268162881 <br> Email: realMadrid@gmail.com <br> Location on Map: <a href="https://www.google.com/maps/d/viewer?mid=1NrpWiTaehWGOOLZYEyvtJIzCydg&hl=en_US&ll=40.47724800000001%2C-3.6094379999999915&z=17">Here</a>',
    },
    {
        id: 4,
        image: 'main_style/images/club5.jpg',
        title: 'NAPOLI FC',
        disc:  'Napoli has won three Serie A titles, six Coppa Italia titles, two Supercoppa Italiana titles, and one UEFA Cup. The club was formed in 1926 as Associazione Calcio Napoli',
        cont:  'Phone: 1268162881 <br> Email: Napoli@gmail.com <br> Location on Map: <a href="map.com">Here</a>',
    },
    {
        id: 5,
        image: 'main_style/images/club6.webp',
        title: 'LIVERPOOL FC',
        disc:  'Domestically, the club has won 19 League titles, eight FA Cups, a record nine League Cups and 16 FA Community Shields. In international competitions, the club has won six European Cups, three UEFA Cups, four UEFA Super Cups—all English records—and one FIFA Club World Cup.',
        cont:  'Phone: 1268162881 <br> Email: liverpool@gmail.com <br> Location on Map: <a href="map.com">Here</a>',
    },
    {
        id: 6,
        image: 'main_style/images/club7.jpg',
        title: 'ARSENAL',
        disc:  'The club has won 13 league titles (including one unbeaten title), a record 14 FA Cups, two League Cups, 16 FA Community Shields, one European Cup Winners Cup, and one Inter-Cities Fairs Cup.',
        cont:  'Phone: 1268162881 <br> Email: Arsenal@gmail.com <br> Location on Map: <a href="map.com">Here</a>',
    },
    {
        id: 7,
        image: 'main_style/images/club8.jpg',
        title: 'FC PORTO',
        disc:  ' Porto have won a total of 83 titles (regional competitions not considered), of which 76 were achieved domestically and 7 were obtained in international competitions.',
        cont:  'Phone: 1268162881 <br> Email: FCporto@gmail.com <br> Location on Map: <a href="map.com">Here</a>',
    },
    {
        id: 8,
        image: 'main_style/images/club9.jpeg',
        title: 'SL BENFICA FC',
        disc:  'With 85 major trophies won, Benfica is the most decorated club in Portugal. They have won 82 domestic trophies: a record 38 Primeira Liga titles, a record 26 Taça de Portugal, a record 7 Taça da Liga, 8 Supertaça Cândido de Oliveira and 3 Campeonato de Portugal.',
        cont:  'Phone: 1268162881 <br> Email: slBenfica@gmail.com <br> Location on Map: <a href="map.com">Here</a>',
    }
];



const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
    document.getElementById("Clubs").innerHTML = categories.map((item)=>
    {
        var {image,title} = item;
        return(
            `<div class = 'box'>
            <div class = 'image'>
                <img src = ${image}></img>
            </div>
            <div class = 'conten'>
                <p>${title}</p>
                `+
                "<button onclick = 'addtocart("+(i++)+")'>Read More</button>"+
                `</div>
            </div>`
            )
    }).join('');
    

   


    var cart = [];

    function addtocart(a){
        var closebtn = document.getElementById("popup-1");
    closebtn.classList.toggle("active");
        cart.push({...categories[a]});
        displaycart();
    }

    function delElement(a){
        var closebtn = document.getElementById("popup-1");
        closebtn.classList.toggle("active");
        cart.splice(a, 1);
        displaycart();
    }

    function displaycart(a) {
        let j=0; total = 0;
        if(cart.length==0){
            document.getElementById('cartItem').innerHtml = "your cart is empty";
        }
        else if(cart.length==1){
            document.getElementById("cartItem").innerHTML = cart.map((items)=>
            {
                var { image, title, disc, cont} = items;        
                return(
                    `<div class = 'cart-item'>
                    <div class = 'row-img'>
                    <img class = 'rowing' src = ${image}>
                    </div>
                    <p style = 'font-size: 20px;'>${title}</p>
                    <h4 style = 'font-size: 18px;'>${disc}</h4>
                    <p style = 'font-size: 18px;'>${cont}</p>
                    </div>
                    `);
            }).join('');
        }
        }
