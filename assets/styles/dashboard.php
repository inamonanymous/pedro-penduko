<style>     
    #status, #user, #admin{
        display: flex;
        flex-wrap: wrap;
    }

    .info-box{
        font-weight:bold;
        padding: 0.3rem 2rem;
        /*border-left: 5px solid;*/
        margin: 1rem;
        flex-basis: 45%;
        border-radius: 15px;
        box-shadow: 7px 7px 4px rgba(0, 0, 0, 0.35);
        background-color: #caf0f8;
        /*text-transform: uppercase; */
        text-align: right;
        text-align: center;
    }

    .heading{
        display: flex;
        justify-content: space-between;
    }
    .heading h5{ 
        color: black;
        text-align: center;
        padding: 0.5rem 1rem;
        flex-basis: 100%;
        border-radius: 10px;
        border:1px solid;
        margin: 0.5rem 0;
    }

    .info-box p{
        margin: 5px;
        text-decoration: ;
        background-color: #b8c0ff;
        /*background-color: #b2ff9e;*/
        border-radius: 20px;
        border: 1px solid;
        text-align: center;
        width: 200px;
        display: block;
        text-align: center;
    }

    .info-content{
        margin-bottom: rem;
    }

    .info-content .num{
        font-size: 1rem;
        width: 50px;
        text-align: center;
        border: 1px solid;
        flex-basis: 100%;
        text-decoration: underline;
    }

    .info-box a {   
        background-color: ;
        color: black;
        text-decoration: underline;
        font-weight:bold;
    }
    .info-box a :hover{
        color:blue;
    }
    /* START-hardcoding */
    #Booking h5{
        background-color: #b8c0ff;
    }
    #Earning h5 {
        background-color: #b8c0ff;
    }
    #Bus {
        /*cubicle*/
    }

    #Bus h5{
        background-color: #b8c0ff;
    }
    #Bus a{
        /* view more */
    }
    #Route h5{
        background-color: #b8c0ff;
    }
    #Seat h5{
        background-color: #b8c0ff;
    }
    #Customer h5{
        background-color: #b8c0ff;
    }
    #Admin h5{
        background-color: #b8c0ff;
    }
    /* END-hardcoding */


    #admin .info-box{
        text-align: center;
        padding: 1rem 2rem;
        border: none;
    }

    #admin h4{
        margin: 0.5rem 0;
        color: black;   
    }

    #admin img{
        border-radius: 20%;
    }
    h4{
        /*text-transform: uppercase;*/
        padding: 0rem 1rem;

    }


    @media only screen and (min-width:1000px){
        #main-content{
            flex-grow: 1;
        }

        .info-box{
            flex-basis: 20%;
        }

        #admin .info-box{
            flex-basis: 15%;
        }
    }
</style>