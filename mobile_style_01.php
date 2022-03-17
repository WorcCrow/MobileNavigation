<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Menu</title>

    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <style>
        body{
            margin:0;
            padding:0;
            background:rgb(100,100,100);
        }

        
        .mobileMenu{
            display:none;
            font-size:4vw;
            background:white;
            position:absolute;
            bottom:0px;
            left:0px;
            width:100%;
            height:15vw;
            border-radius:25% 25% 0% 0%;
        }

        .mobileMenu ul{
            padding:0px;
            width:100%;
            list-style-type:none;
            display:flex;
            justify-content:space-evenly;
            
        }
        .mobileMenu ul > li{
            width:100%;
            //height:70px;
            text-align:center;
            list-style-type:none;
            cursor:pointer;
            user-select: none;
        }

        .mobileMenu ul > li > .icon{
            top:0em;
            transition:500ms;
            transition-property:top;
            //user-select: none;
        }

        .mobileMenu ul > li.selected > .icon{
            position:relative;
            top:-1.5em;
            left:0px;
            z-index: 101;
        }

        .mobileMenu ul > li > div{
            position:relative;
            font-size:0.8em;
            top:0em;
            transition:500ms;
            transition-property:top;
            user-select: none;
        }

        .mobileMenu ul > li.selected > div{
            position:relative;
            top:-0.5em;
        }

        .mobileMenu li.indicator{
            position: absolute;
            top: -5.5vw;
            left: 43.8vw;
            width: 12vw;
            height: 12vw;
            background: orange;
            border-radius: 100%;
            transition:0.5s;
            transition-property:left;
            display:block;
            box-sizing: border-box;
            border:1vw solid rgb(100,100,100);
        }

        .mobileMenu li.indicator::before{
            content:'';
            position:absolute;
            top:1.1em;
            left:-1.1em;
            background:transparent;
            width:1em;
            height:1em;
            border-top-right-radius:50%;
            box-shadow:0em -0.5em 0em 0em rgb(100,100,100);
        }

        .mobileMenu li.indicator::after{
            content:'';
            position:absolute;
            top:1.1em;
            right:-1.1em;
            background:transparent;
            width:1em;
            height:1em;
            border-top-left-radius:50%;
            box-shadow:0em -0.5em 0em 0em rgb(100,100,100);
        }

        .mobileMenu li.selected ~ li.indicator{
            display:block;
        }


        .mobileMenu ul > li.selected:nth-child(1) ~ li.indicator{
            left: 3.8vw;
            z-index: 100;
        }

        .mobileMenu ul > li.selected:nth-child(2) ~ li.indicator{
            left: 23.8vw;
            z-index: 100;
        }

        .mobileMenu ul > li.selected:nth-child(3) ~ li.indicator{
            left: 43.8vw;
            z-index: 100;
        }

        .mobileMenu ul > li.selected:nth-child(4) ~ li.indicator{
            left: 63.8vw;
            z-index: 100;
        }

        .mobileMenu ul > li.selected:nth-child(5) ~ li.indicator{
            left: 83.8vw;
            z-index: 100;
        }

        @media only screen and (max-width: 600px) {
            .mobileMenu{
                display:block;
            }

        }


    </style>
</head>
<body>




<div class="mobileMenu">
    <ul>
        <li>
            <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
            </span>
            <div>Home</div>
        </li>
        <li>
            <span class="icon">
                <ion-icon name="wallet-outline"></ion-icon>
            </span>
            <div>Wallet</div>
        </li>
        <li class="selected">
            <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
            </span>
            <div>Home</div>
        </li>
        <li>
            <span class="icon">
                <ion-icon name="game-controller-outline"></ion-icon>
            </span>
            <div>Fun</div>
        </li>
        <li>
            <span class="icon">
                <ion-icon name="menu-outline"></ion-icon>
            </span>
            <div>More</div>
        </li>

        <li class="indicator"></li>
    </ul>
</div>
    

<script>

    let item = document.querySelectorAll('.mobileMenu li')
    item.forEach((e,ei)=>{
        e.addEventListener('click',()=>{
           selected(ei)
        })
    })

    let selected = (i)=>{
        item.forEach((e,ei)=>{
            if(ei === i){
                e.classList.add('selected')
            }else{
                e.classList.remove('selected')
            }
        })
    }
</script>
</body>
</html>