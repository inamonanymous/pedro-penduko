<style>
    body{
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    justify-content: center;
    border-radius: 50px;
    }

    html{
        scroll-behavior: smooth;
    }

    *, *::after, *::before{
        box-sizing: inherit;
    }

    /* #navbar{
        background-color: black;
        color: white;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        position: fixed;
        z-index: 1;
        top: 0;
        width: 100%;
    }

    #navbar ul{
        list-style-type: none;
        padding: 0.4rem 0;
        margin: 0;
        display: flex;
    }

    .nav-item{
        margin: 0 0.3rem;
        display: flex;
        justify-content: center;
        align-items: center;
    } */
    .adminDp{
        border-radius: 20%;
    }

    #welcome{
        background-color: #caf0f8;
    }

    #welcome ul{
        
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        padding: 0;
        margin: 5;
    }

    #welcome li{
        margin: 0 1rem;
        padding: 0.5rem 0;
    }

    #welcome li:first-child{
        font-weight: 800;
        font-size: 1.4rem;
        color: black;
        text-decoration: underline;
    }
    #USER{
        color: black;
        text-decoration: underline;
    }
    #logout{
        background-color: #e63946;
        font-weight: 800;
        border-radius: 7px;
        text-align: center;
        border:1px solid;
        width: fit-content;
        margin-left: 70px;
    }

    #logout a{
        color: black;
        text-decoration: none;
    }

    @media only screen and (min-width:1000px){
        #sidebar{
            text-align: center;
            /* background-color: #207DFF; */
            background-color: #caf0f8;
            color: black;
            width: 15%;
            position: fixed;
            top: 0%;
            padding-top: 1rem;
            z-index: 2;
            height: 100vh;
        }
        #sidebar h4
        {
            color: black;
            text-decoration: underline;
        }
        }
        #sidebar h3{
            margin: 0.5rem 0;
        }

        #sidebar p{
            margin: 0;
        }

        #sidebar ul{
            margin-top: 2rem;
        }

        #options{
            list-style-type: none;
            text-align: left;
            padding-left: 0;
        }
        .option a{
            border: 1px solid;
            display: block;
            padding: 0.5rem;
            text-decoration: none;
            color: inherit;
        }

        .active {
            background-color: #b8c0ff;
            color:black;
            border-top-right-radius:1px;
            border: 2px solid;
        }

        .option a:hover{
            color: black;
            background-color: #b8c0ff;
            text-decoration: underline;
            border: 1px solid;
        }

        #main-content{
            margin-left: 15%;   
        }

        .info-box{
            flex-basis: 20%;
            
        }
        #addCustomerAlert
        {
        }
        .modal-body
        {
        }
        .modal-header
        {
            background-color: #caf0f8;
            font-weight:bold;
        }
        #busnumber
        {
           
            color: white;
        }
        .modal-footer
        {
            color: white;
            background-color: #caf0f8;
            justify-content: center;
        }
        #button
        {
            background-color: #2b9348;
        }
        #addModal-button
        {
            background-color: #432818;
        }
        #addRouteAlert
        {
        }
        #button
        {
             background-color: #b8c0ff;
            color: black;
            font-weight: bold;
            border-radius: 30px;
            border: 2px solid;
        }
        #submit
        {
            background-color: #b8c0ff;
            color: black;
            font-weight: bold;
            border-radius: 30px;
            border: 2px solid;
        }
        #add{
        background-color: #b8c0ff;
        color: black;
        border: 3px solid;
        border-radius: 20px;
        }
 </style>