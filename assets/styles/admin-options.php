<style>
    *{
    font-family: Montserrat;
    }

    .error{
        font-size: 15px;
        color: yellow;
    }
    .table-bordered 
    {
        background-color: #caf0f8;
        border-color: black;
        border: 3px solid;
    }

    #booking #head, 
    #customer #head,
    #route #head,
    #seat #head,
    #bus #head
    {
        /* display: flex;
        justify-content: space-between; */
        padding-top: 1rem 1rem;
        background-color: #caf0f8;
        width: 200px;
        text-align: center;
        flex-basis: 100%;
        border-radius: 10px;
    }


    #head #search{
        display: flex;
        align-items: center;
    }

    #search #wrapper{
        border: 2px solid black;
        width: 200px;
        border-radius: 20px;
        background-color: black;
        color: black;
        padding: 0.1rem 0.5rem;
    }

    #wrapper input{
        border: none;
        font-size: 17px;
        outline: none;
    }

    #wrapper a{
        color: #8B8989;

    }

    #wrapper a:hover{
        color: 99582a;

    }

    #booking,
    #customer,
    #route,
    #bus,
    #seat
    {
        padding: 0 3rem;
        color: black;
    }

    #booking-results > div,
    #customer-results > div,
    #route-results > div,
    #bus-results > div
    {
        margin-bottom: 5rem;
        color: black;
    }

    #booking-results button,
    #customer-results button,
    #route button,
    #bus-results button
    {
        /* padding: 0.3rem 1rem; */
        border-radius: 20px;
        color: black;

    }

    .button{
        border-width: 5px solid;
        border: none;
        font-weight: bold;
        /*text-transform: uppercase; */
    }

    #add-button{
        background-color: #caf0f8;
        color: black;
    }

    #route table{
        width: 100%;
        color: black;
    }

    table{
        font-size: 15px;
        color: black;
    }

     #bus table{
        width: 50%;
        margin: 0 auto;
        color: black;
    }

    #bus .edit-button,
    #bus .delete-button,
    #route .edit-button,
    #route .delete-button,
    #customer .edit-button,
    #customer .delete-button{
        padding: 0.3rem 0.7rem;
    }
    /* #booking table{
        width: 100%;
    } */


    table th,td{
        padding-left: 0.3rem;
    }

    table button{
        color: black;
    }

    .edit-button{
        background-color: #2b9348;
    }

    .delete-button{
        background-color: #e63946;
    }
    .edit-button,
    .delete-button{
        font-size: 10px

    }

    .disabled{
        opacity: 5;
    }

    .editRouteForm input{
        margin: 0 1rem; 
    }

    .editRouteForm input.cost{
        flex-basis: 15%;
    }

    .editRouteForm input.time,
    .editRouteForm input.date,
    .editRouteForm > div.searchBus{
        flex-basis: 40%;
        color: black;
    }

    .editRouteForm input.busnoInput{
        width: 100%;
        margin: 0;
    }

    #noRoutes,
    #noCustomers{
        background-color: #caf0f8;
        font-weight: bold;
        color: black;
        
    }

    /* For seat.html */
    #main form{
        display: flex;
    }

    #main form input, 
    #main form button{
        margin: 0;
        padding: 0.4rem  1rem;
        font-size: 1.1rem;   
    }

    #main form input{
        border-radius: 5px 0px 0px 5px;
        outline: none;
        border: 2px solid;
        color: black;
    }

    #main form button{
        background-color: #caf0f8;
        color: black;
        border: none;
        border-radius: 0px 5px 5px 0px;
    }

    .hl{
        background-color: #79ff9c; 
    }

    .editRouteForm .searchBus{
        margin: 0 1rem;
    }

    .searchBus{
        position: relative;
    }

    .sugg{
        background-color: white;
        position: absolute;
        margin-top: 0.4rem;
        width:100%;
        border-radius: 5px;
        max-height: 114px;
        overflow: auto;
    }

    .editRouteForm .sugg{
    }

    .sugg li{
        border: solid #b0b0b0;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
        list-style-type: none;
        padding: 0.35rem 0.8rem;
        
    }

    .sugg li:first-child{
        border-top-width: 2px;
    }
    .sugg li:hover{
        cursor: pointer;
        background-color: #b0b0b0;
    }
    /* styles for Booking.php Forms nd all */
    #seatsDiagram td,
    #displaySeats td{
        padding: 1rem;
        text-align: center;
        margin: 0.3rem;
        width: 55px;
        border: 3px solid transparent;
        display: inline-block;
        background-color: #efefef;
        border-radius: 5px;
    }

    #displaySeats{
        margin: 3rem auto rem auto;
    }


    #seatsDiagram{
        width: 200%;
        margin-bottom: 1rem;
    }

    #seatsDiagram  td.selected{
        background-color: #caf0f8;
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand;
        animation-duration: 300ms;
        animation-fill-mode: both;
    }   

    #seatsDiagram td.notAvailable,
    #displaySeats td.notAvailable
    {
        color: white;
        background-color: #db2619;
    }

    #seatsDiagram td:not(.space,.notAvailable):hover{
        cursor: pointer;
        border-color: #caf0f8;
    }

    #seatsDiagram .space,
    #displaySeats .space{
        background-color: white;
        border: none;
    }

    #routeSugg{
        display: flex;
        justify-content: space-between;
    }
    #pnr-form
    {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        padding-bottom: 0.5rem;
        background-color: #fb8500;
        border-radius: 10px;
        width: 25%;
        text-align:center;
        justify-content: center;
    }
    
    @-webkit-keyframes rubberBand {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
                    transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1);
        }

        100% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }
        }

        @keyframes rubberBand {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
                    transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1);
        }

        100% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
        }
        }

        .rubberBand {
        -webkit-animation-name: rubberBand;
                animation-name: rubberBand;
        }
        .submit{
            background-color: #caf0f8;
        }
</style>