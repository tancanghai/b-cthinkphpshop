//load()  table和分页
function list(obj) {
    let _this={};
    _this.offset = obj.offset || 0;//分页的起始条
    _this.num = obj.num || 0;//多少条
    _this.pagetouse = obj.pagetouse || false;//是否需要改变的表单值
    _this.url = obj.url || "";//load加载地址
    _this.targetElem = obj.targetElem || "";//目标元素加载load
    _this.formElem = obj.formElem || "";//表单元素
    _this.pageCountElem = obj.pageCountElem || "";//数据总条数元素
    if(_this.pagetouse == true){
        window.param_data = $(_this.formElem).serializeJSON();
    }
    let data={"param_data":param_data,"offset":_this.offset,"num":_this.num};
    layer.load();
    $(_this.targetElem).load(_this.url, data, function () {
        layer.closeAll();
        if(_this.pagetouse == true){
            let pageCount = $(_this.pageCountElem).val();
            pageUse(pageCount,_this);
        }
    });
}
//分页函数
function pageUse(pageCount,that){
    layui.use(['laypage'], function(){
        let laypage = layui.laypage;
        laypage.render({
            elem: 'page-box',
            count: pageCount,
            layout: ['count', 'prev', 'page', 'next', 'refresh', 'skip', 'limit'],
            // curr: location.hash.replace('#!fenye=', ''),
            jump: function(obj,first){
                //obj 代表分页的参数 jump分页操作
                let curr=obj.curr;
                let limit=obj.limit;
                if (!first){
                    list({"offset":(curr-1)*limit,"num":limit,"pagetouse":false,"url":that.url,"targetElem":that.targetElem,"formElem":that.formElem,"pageCountElem":that.pageCountElem});
                }
            }
        });
    });
}