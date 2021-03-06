.championprizes{
    width: 100%;
    height: 700px;
    background-color: #151531;
    position: relative;
    overflow: hidden;
}

.title-championprizes {
    text-align: center;
    font-family: "Poppins", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 48px;
    line-height: 72px;
    padding-top: 80px;
    margin-bottom: 50px;
    color: #39beff;
}

.container-championprizes{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    z-index: 10;
    position: relative;
}

.container-championprizes .section{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.container-championprizes .first .box{
    background-image: url("{{asset("res/championprizes-img1.png")}}");
    background-size: 80%;
    background-position: center;
}

.container-championprizes .second .box{
    background-image: url("{{asset("res/championprizes-img2.png")}}");
    background-size: 80%;
    background-position: center;
}

.container-championprizes .third .box{
    background-image: url("{{asset("res/championprizes-img3.png")}}");
    background-size: 80%;
    background-position: center;
}

.container-championprizes .uppertext{
    display: flex;
    flex-direction: row;
    width: 100%;
    align-items: flex-end;
}

.container-championprizes .first .uppertext{
    background: -webkit-linear-gradient(#FFBF00, #FFDC73
    );
    -webkit-background-clip: text;
            background-clip: text;
    -webkit-text-fill-color: transparent;
}

.container-championprizes .second .uppertext{
    background: -webkit-linear-gradient(#787878, #D9D9DA
    );
    -webkit-background-clip: text;
            background-clip: text;
    -webkit-text-fill-color: transparent;
}

.container-championprizes .third .uppertext{
    background: -webkit-linear-gradient(#D66100, #FB7200

    );
    -webkit-background-clip: text;
            background-clip: text;
    -webkit-text-fill-color: transparent;
}

.container-championprizes .number{
    font-size: 64px;
    font-weight: bold;
    align-self: center;
    width: fit-content;
    display: flex;
    margin-left: 45%;
}

.container-championprizes .text{
    font-size: 36px;
    padding-bottom: 10px;
}

.container-championprizes .box{
    width: 100%;
    height: 310px;
    width: 300px;
    background-repeat: no-repeat;
    border-radius: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 2;
    padding-top: 50px;
    margin: 10px;
}

.container-championprizes .money{
    font-size: 20px;
    font-weight: bold;
    color: white;
}

.container-championprizes .plus{
    color: white;
    margin: -5px;
}

.container-championprizes .object{
    font-size: 20px;
    color: white;
}

.championprizes .ellipse1{
    position: absolute;
    top: 200px;
    right: 0;
}

.championprizes .ellipse2{
    position: absolute;
    left: 0px;
    top: 350px;
    z-index: 1;
}
