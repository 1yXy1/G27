function addnumber(x) {
  let target = "foodnumber" + x;
  let target2 = "foodprice" + x;
  var number = document.getElementById(target);
  var price = document.getElementById(target2);
  var sum = document.getElementById("sum");
  var valueStart = Number(number.value);
  var valueEnd = valueStart + 1;
  number.value = valueEnd;
  var pricevalue = Number(price.value);
  var sumvalue = Number(sum.value);
  sumvalue = sumvalue + pricevalue;
  sum.value = sumvalue;
}
function minusnumber(x) {
  let target = "foodnumber" + x;
  let target2 = "foodprice" + x;
  var number = document.getElementById(target);
  var price = document.getElementById(target2);
  var sum = document.getElementById("sum");
  var valueStart = Number(number.value);
  var valueEnd = valueStart - 1;
  var pricevalue = Number(price.value);
  var sumvalue = Number(sum.value);
  if (valueStart == 0) {
    number.value = 0;
    alert("已经是0，再减你要给我炒一份?");
  } else {
    number.value = valueEnd;
    sumvalue = sumvalue - pricevalue;
    sum.value = sumvalue;
  }
}

// --------------------------------------------------------------
function getpic(x) {
  $.ajax({
    url: "/src/php/returnurl.php", //后端地址--------
    type: "post", //提交方式
    data: {
      point: x,
    },
    dataType: "JSON", //规定请求成功后返回的数据
    success: function (data) {
      document.getElementById("foodpic" + x).src = data[0].data[x - 1].url;
      document.getElementById("foodprice" + x).value =
        data[0].data[x - 1].price;
      var box =
        "卡路里：" +
        data[0].data[x - 1].calorie +
        "大卡  蛋白质：" +
        data[0].data[x - 1].protein +
        "  脂肪：" +
        data[0].data[x - 1].fat;
      document.getElementById("foodpic" + x).title = box;
    },
    error: function (errorMsg) {
      //请求失败之后进入该方法，errorMsg为失败后返回的错误信息
    },
  });
}
getpic(1);
getpic(2);
getpic(3);
getpic(4);

function pay() {
  var foodnumber1 = $("foodnumber1").val();
  var foodnumber2 = $("foodnumber1").val();
  var foodnumber3 = $("foodnumber1").val();
  var foodnumber4 = $("foodnumber1").val();
  $.ajax({
    url: "/src/php/pay.php", //后端地址--------
    type: "post", //提交方式
    data: {
      foodnumber1: foodnumber1,
      foodnumber2: foodnumber2,
      foodnumber3: foodnumber3,
      foodnumber4: foodnumber4,
    },
    dataType: "JSON",
    success: function (data) {},
    error: function (errorMsg) {},
  });
}
