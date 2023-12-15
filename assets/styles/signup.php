<style>
    *{
    font-family: Montserrat;
    }
    
    #signupForm{
        width: 65%;
        margin: 0 auto;
        text-align: center;
        padding-bottom: 1.5rem;
    }

    form{
        text-align: center;
        width: 80%;
        margin: 0 auto;
    }

    form > div{
        margin: 1rem ;
    }

    form input{
        width: 100%;
        padding:0.5rem 1rem;
        border-radius: 20px;
        font-weight: bold;
    }

    form > div:first-child{
        display: flex;
        justify-content: space-between;
    }

    form > div:first-child input{
        flex-basis: 50%;
    }

    form span{
        font-size: 0.8rem;
    }

    #signup-btn{
        border-radius: 20px;
        border:3px solid;
        font-family: Montserrat;
        font-weight: bold;
        background-color: #fb8500;
        color: black;
        display: block;
        width: 100px;
        margin: 0 auto;
        padding: 0.5rem 0;
    }

    .error{
        color: red;
    }

    @media only screen and (min-width: 1000px)
    {
        #add-admin{
            display: flex;
            background-image: url("../assets/img/lli.admin.jpg");
            background-size: cover;
            position: relative;
            display: flex;
            justify-content: left;
            align-items: center;
            height: calc(100vh - 80px);
            padding-right: 300px;

        }

        #add-admin > div{
            flex-basis: 100%;
        }

        #add-admin > div:first-child{
            display: flex;
        }

        #add-admin > div:last-child{
           
        }

        form{
            width: 100%;
        }
    }
</style>