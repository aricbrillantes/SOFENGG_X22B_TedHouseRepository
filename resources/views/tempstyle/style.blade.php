<!-- Temporary style page-->
<style>
    body{
        font-family: "Roboto Condensed";
        position: relative;
        min-height: 80%;
    }

    #jumbotron{
        padding:2rem 1rem;
        margin-bottom:2rem;
        background-color:#fff;
        border-radius:.3rem
    }

    #jdisplay{
        overflow: hidden;
        text-shadow: 1px 1px #2ab27b;
        font-size:4.5rem;
        font-weight:300;
        line-height:1.2;
    }

    #jdescription{
        margin-top:0;
        margin-bottom:1rem;
        margin: auto;
        width: 70%;
        transform: translate(0%, 0%);
    }

    #row{
        display:-ms-flexbox;
        display:flex;
        -ms-flex-wrap:wrap;
        flex-wrap:wrap;
    }

    #col{
        position:relative;
        width:100%;
        min-height:1px;
        -ms-flex:0 0 33.333333%;
        flex:0 0 33.333333%;
        max-width:33.333333%;
    }

    #jcontainer{
        width:100%;
        padding-right:15px;
        padding-left:15px
        ;margin-right:auto;
        margin-left:auto;
    }
    
    @media (min-width:576px){
        #jcontainer{
            max-width:540px
        }
    }

    @media (min-width:768px){
        #jcontainer{
            max-width:720px
        }
    }

    @media (min-width:992px){
        #jcontainer{
            max-width:960px
        }
    }

    @media (min-width:1200px){
        #jcontainer{
            max-width:1140px
        }
    }

    #jcontainer-fluid{
        width:100%;
        padding-right:15px;
        padding-left:15px;
        margin-right:auto;
        margin-left:auto;
    }

    #h1,#h2,#h3,#h4,#h5,#h6,h1,h2,h3,h4,h5,h6{
        font-weight:500;
        line-height:1.2;
    }

    #h1,h1{
    font-size:2.5rem
    }

    #h2,h2{
    font-size:2rem
    }

    #h3,h3{
    font-size:1.75rem
    }

    #h4,h4{
    font-size:1.5rem
    }

    #h5,h5{
    font-size:1.25rem
    }

    #h6,h6{
    font-size:1rem
    }

    h2,h3,p{
        orphans:3;widows:3
    }

    h2,h3{
        page-break-after:avoid
    }

    #small,small{
        font-size:80%;font-weight:400
    }
</style>