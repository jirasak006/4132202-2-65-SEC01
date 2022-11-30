
    var num = 10;
    let name = "peem";
    // let Array = [10,15,"peem"];
    const obj = {name:"peem",aeg: 19 };
    const objMix = {deta:[
        {name:"ped",aeg: 18},
        {name:"pem",aeg: 39},
        ],
    };

    console.log(num);
    console.log(Array);
    console.log(objMix);
    let string = num + name;
    console.log(string);

    string = objMix.deta[1].name + Array[0];
    console.log(string);

    string = "<p>" + Array[2] + "</p>";
    string = `<p>${Array}</p>`;

    console.log(string);

    function Add(a,b){
        return a+b;
    }
    console.log(Add(3,5));

    document.getElementById("div1").innerHTML = name;

    $(function(){
        // alert("hello");
        $("#div1").html("jirasak");

        $("#bt1").bind("click",function (){
            $("#div1").html("i love you")
        });
        $("#bt3").click(() =>{
           $(".in1").val("BRU"); 
        });
        $("#bt4").click(() =>{
           $(".in1:odd").addClass("red"); 
        });
        $("#div_about").load("./pages/about.html")
        $("#div_form").load("./pages/form.html")
    });
