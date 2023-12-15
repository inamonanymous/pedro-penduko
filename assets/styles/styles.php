<style>
    body, html{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
    }

    *, *::after, *::before{
        box-sizing: inherit;
    }
    .link-light{
        text-decoration: none;
    }

    .searchQuery{
        position: relative;
    }

    .burloloy {
        background-color: rgba(255, 0, 0, 0.8);
        padding: 20px;
        border-radius: 50px 20px;
        color: white;
    }
    
    #burloloy-0 {
        width: 50%;
    }

    #burloloy-1 {
        width: 80%;
        overflow-x:auto;
        max-height: 1000px;
    }

    th, td {
        color: white;
    }

    .sugg{
        position: absolute;
        width: 100%;
        z-index: 1;
        background-color: white;
        max-height: 179px;
        overflow: auto;
    }

    .sugg li{
        list-style-type: none;
        padding: 0;
        text-align: left;
        padding: 0.3rem;
        text-transform: ;
        border-style: solid; 
        border-color: black;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
    }

    .sugg li:hover{
        background-color: #efefef;
        cursor: pointer;
    }


    .hl{
        background-color: ;
    }


    /* Overriding Bootstrap */
    nav a:hover{
        color: red;
    }
    nav{
        text-align: center;
        background-color: #caf0f8;

    }

    nav div, nav ul{
        margin-top: 5rem;
        
    }

    nav div:first-child{
        margin-top: 0;
    }

    nav > div a{
        display: block;
    }

    nav ul{
        list-style-type: none;
        padding: 0;
        margin-bottom: 0;
    }

    nav a{
        padding-bottom: 0.2rem;
        text-decoration: none;
        color: black;
        font-weight: bold;
        text-transform: ;
    }

    nav a:not(.nav-logo):hover{
        text-decoration: underline;
    }

    .nav-logo{
        letter-spacing: 10px;
        transition: none;
    }

    /* Alert Message on top of the header */
    .alert{
        z-index: 3;
        border-radius: 0px;
        background-color: #caf0f8;
    }


    #home{
        background-image: url("assets/img/lli.jpg");
        background-size: cover;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }

    #route-search-form{
        width: 50%;
        padding: 1rem 0.5rem;
        color: black;
        position: relative;
        z-index: 1;
    }

    #route-search-form::before{
        content: "";
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        width: 100%;
        background-color: white;
        z-index: -1;
        opacity: 0.6;
    }


    #route-search-form h1{
        margin-top: 0;
        text-align: center;
        color: black;
    }

    form{
        padding: 0 0.5rem;
        font-weight: bold;
    }

    #route-search-form > div{
        margin: 1rem 0;
    }

    form input, form textarea{
        border: 2px solid black;
        outline: none;
        width: 100%;
        font-size: inherit;
        border-radius: 5px;
        padding-left: 0.3rem;
    }


    #route-search-form form input{
        margin-top: 0.8rem;
    }


    #route-search-form form div:last-child{
        text-align: center;
    }

    form button{ 
        border:2px solid;
        padding: 0.3rem 0.7rem;
        font-weight: bolder;
        background-color: transparent;
        transition: background-color 800ms, color 800ms;
        border-radius: 4px;
    }

    form button:hover{
        background-color: #fff;
        color: #201E22;
        cursor: pointer;
    }

    #info-num{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #info-num figure{
        flex-basis: 30%;
        padding: 2rem 0;
        text-align: center;
        border-radius: 5px;
    }

    #info-num figcaption{
        margin-top: 1rem;
        text-transform: uppercase;
    }

    #info-num .num{
        display: block;
        margin-bottom: 0.3rem;
        font-size: 1.2rem;
        font-weight: 800;
    }

    #pnr-enquiry{
        
        border: 1px solid;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        
        

    }

    #pnr-form{
        padding: 4rem 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: blacke;
        position: relative;
        z-index: 1;
    }

    #pnr-form form{
        width: 70%;
    }

    #pnr-form input{
        width: 100%;
    }

    #pnr-form::before{
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0%;
        background-color: black;
        border-radius: 10px;
        z-index: -1;
        opacity: 0.5;
        height: 60%;
    }

    #pnr-form div{
        margin: 1rem auto;
        width: 80%;
    }

    #pnr-form button{
        font-weight: bold;
        font-size: 14px;
        padding: 0.3rem 0.7rem;
        text-transform: uppercase;
        border: 1px solid;
        border-radius: 5px;
        color: black;
        background-color: #caf0f8;
        transition: background-color 400ms;
    }

    #pnr-form button:hover{
        background-color: #aacc00;
        cursor: pointer;
    }

    #about{
        text-align: center;
        padding: 3rem 0;
        background-color: red;
        border: 1px solid;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        font-weight: bold;
    }

    #about h1{
        margin: 0;
    }

    #about p{
        line-height: 26px;
    }
    .pnr-details{
        list-style-type: none;
        padding: 0;
    }

    .nav-scroll{
        position: fixed;
        background-color: white;
    }

    /* Tablet */
    @media only screen and (min-width: 784px){
        

        header{
            position: absolute;
            display: block;
            top: 0;
            width: 100%;
            z-index: 2;
            transition: background-color 500ms;
        }
        nav{
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: 0 auto;
            padding: 0.5rem;
        }

        nav > div{
            display: flex;
            align-items: center;
            flex-grow: 1;
            justify-content: center;
        }

        nav ul{
            display: flex;
            flex-grow: 1;
            justify-content: center;
        }

        nav div, nav ul{
            margin-top: 0;
        }
        
        nav a{
            border-bottom: 2px solid transparent;
            margin: 0 1rem;
            transition: border-color 800ms;
            border-radius: 2px;
        }

        nav a:not(.nav-logo):hover{
            border-color: black;
            text-decoration: none;
        }

        #home{
            height: 100vh;
            background-position: 40% 65%;
            background-attachment: fixed;
            display: block;
        }

            
        #route-search-form{
            position: absolute;
            top: 28%;
            right: 10%;
            width: 20rem;
            padding: 1rem 2rem;
        }


        #route-search-form h1{
            margin-top: 0;
            text-align: center;
        }

        form{
            padding: 0 0.5rem;
            font-weight: bold;
        }

        #route-search-form form > div{
            margin: 1rem 0;
        }

        #block{
            width: 100%;
        }


    }


    /* Desktops */
    @media only screen and (min-width: 992px){
        /* Alert Message on top of the header */
        .alert{
            position: absolute;
           width: 100%;
            z-index: 3;
            border-radius: 0px;
        }

        .alert-dark{
            width: 50%;
            left: 50%;
            transform: translateX(-50%);
            border-radius:;
        }

        nav{
            width: 100%;
            border-radius: 10px;
            border: 1px solid;
            height: 46px;
        }

        #home{
            background-position: 60% 65%;
        }


        #route-search-form{
            background-color: #efefef;
            position: absolute;
            width: 60rem;
            padding: 2.5rem 5rem;
        }

        #block{
            width: 50%;
            margin: 0 auto;
        }

        #info-num figure{
            flex-basis: 15%;
        }

        #pnr-enquiry{
            height: 30vh;
            background-color: rgba(255, 0, 0, 0.8);
        }

        #pnr-form{
            width: 60%;
        }

        #about{
            height: auto;
            padding: 1.2rem;
            background-color: #caf0f8;   
        }
        #about div{
            width: 100%;
        }
    }
        #top
        {
            background-color: #caf0f8;
        }
        #mid
        {
            background-color: white;

        }
        #bottom
        {
            background-color: #caf0f8;
            color: black;   
        }
        #contact
       {
        color: black;
        text-align: center;
        background-color: #caf0f8;
        border: 1px solid;
      }
</style>