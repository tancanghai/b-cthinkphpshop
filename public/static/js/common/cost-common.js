var CONSTCONFIG = (function(w){
    //品牌
    w.brands = {
        "BRANDSTATUSNONE":{"VAL":'0',"DESC":"没有"},
        "BRANDSTATUSHAVE":{"VAL":'1',"DESC":"有"},
    }
    //文章
    w.article = {   //是否显示到表行栏1是0否
        "SHOWSTATUSNONE":{"VAL":'0',"DESC":"否"},
        "SHOWSTATUSHAVE":{"VAL":'1',"DESC":"是"},
        "SHOWTOPNONE":{"VAL":'0',"DESC":"否"},
        "SHOWTOPHAVE":{"VAL":'1',"DESC":"是"},
    }
    //文章栏目
    w.cate = {   //是否显示到表行栏1是0否
        "SHOWNAVNONE":{"VAL":'0',"DESC":"否"},
        "SHOWNAVHAVE":{"VAL":'1',"DESC":"是"},
    }
    return w;
})(window);