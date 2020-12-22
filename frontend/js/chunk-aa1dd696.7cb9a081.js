(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-aa1dd696"],{"550e":function(e,t,n){"use strict";n.d(t,"a",(function(){return d})),n.d(t,"b",(function(){return p}));var r=n("d225"),a=n("b0b4"),i=n("308d"),c=n("6bb5"),o=n("4e2b"),s=n("9242"),l=n("e7d5"),u=(n("20ce"),n("fed8")),d=function(e){function t(){return Object(r["a"])(this,t),Object(i["a"])(this,Object(c["a"])(t).apply(this,arguments))}return Object(o["a"])(t,e),Object(a["a"])(t,[{key:"defaults",value:function(){return{id:null,school_id:null,ordnum:null,content:null}}},{key:"options",value:function(){return{identifier:"id",useFirstErrorOnly:!0}}},{key:"displayField",value:function(){return"ordnum"}},{key:"mutations",value:function(){return{}}},{key:"fieldsSettings",value:function(){return{id:{label:"GLOBALS.ID",type:"text",showInList:!0,showInView:!1,showOnCreate:!1,showOnUpdate:!1,pinned:"left",width:100},school_id:{label:"SCHOOL_KEYS.TITLE_SINGLE",type:"select",showInList:!1,showInView:!1,showOnCreate:!1,showOnUpdate:!1,values:new u["b"]},ordnum:{label:"GLOBALS.ORDER_NUMBER",type:"text",showInList:!0,showInView:!0,showOnCreate:!1,showOnUpdate:!1},content:{label:"GLOBALS.CONTENT",type:"textarea",showInList:!0,showInView:!0,showOnCreate:!0,showOnUpdate:!0,width:500}}}},{key:"validation",value:function(){return{}}},{key:"routes",value:function(){return{fetch:"/editTemplateArticle/{id}",save:"/createTemplateArticle",patch:"/editTemplateArticle",delete:"/deleteTemplateArticle/{id}"}}}]),t}(s["a"]),p=function(e){function t(){return Object(r["a"])(this,t),Object(i["a"])(this,Object(c["a"])(t).apply(this,arguments))}return Object(o["a"])(t,e),Object(a["a"])(t,[{key:"model",value:function(){return d}},{key:"defaults",value:function(){return{orderBy:"id"}}},{key:"routes",value:function(){return{fetch:"/listTemplateArticles"}}}]),t}(l["a"])},e9a6:function(e,t,n){"use strict";n.r(t);var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("vx-card",[e.can("create","TemplateArticle")?n("vs-button",{staticClass:"mb-3 float-right",attrs:{icon:"add",type:"border",to:"/template-articles/create"}}):e._e(),n("vs-row",[n("vs-col",[n("vs-input",{staticClass:"float-right",attrs:{placeholder:e.$t("GLOBALS.SEARCH")},model:{value:e.tableSearch,callback:function(t){e.tableSearch=t},expression:"tableSearch"}})],1)],1),n("vs-row",[n("vs-col",[n("ag-grid-vue",{staticClass:"ag-theme-material w-100 my-4 ag-grid-table",attrs:{"column-defs":e.headerColumns,"row-data":e.templateArticles.models,"grid-options":e.gridOptions,"default-col-def":e.defaultColDef,context:e.context,pagination:!0,"pagination-page-size":10}})],1)],1)],1)},a=[],i=(n("96cf"),n("3b8d")),c=(n("4e06"),n("550e")),o=n("401b"),s=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[e.can("view","TemplateArticle")?n("feather-icon",{attrs:{icon:"Edit3Icon","svg-classes":"h-5 w-5 mr-4 hover:text-primary cursor-pointer"},on:{click:function(t){return e.edit(e.object)}}}):e._e(),e.can("update","TemplateArticle")?n("feather-icon",{attrs:{icon:"EyeIcon","svg-classes":"h-5 w-5 mr-4  hover:text-primary cursor-pointer"},on:{click:function(t){return e.view(e.object)}}}):e._e(),e.can("delete","TemplateArticle")?n("feather-icon",{attrs:{icon:"Trash2Icon","svg-classes":"h-5 w-5 hover:text-danger cursor-pointer"},on:{click:function(t){return e.deleteTemplateArticle(e.object)}}}):e._e()],1)},l=[],u=n("2b0e"),d=u["default"].extend({computed:{object:function(){return this.params.data}},methods:{deleteTemplateArticle:function(e){var t=this;e.delete().then((function(){t.$vs.notify({color:"success",title:t.$t("GLOBALS.DELETE_SUCCESSFUL"),text:t.$t("GLOBALS.DELETE_SUCCESSFUL_CONTENT")}),t.params.context.componentParent.loadData()})).catch((function(e){t.$vs.notify({color:"danger",title:t.$t("GLOBALS.SOMETHING_WENT_WRONG"),text:e.message})}))},edit:function(e){this.$router.push({name:"template-articles-edit",params:{id:e.id,templateArticle:e}})},view:function(e){this.$router.push({name:"template-articles-view",params:{id:e.id,templateArticle:e}})}}}),p=d,h=n("2877"),f=Object(h["a"])(p,s,l,!1,null,null,null),m=f.exports,w=n("4702"),v={components:{AgGridVue:o["AgGridVue"]},mixins:[w["a"]],data:function(){return{templateArticles:new c["b"],activeConfirm:!1,context:{componentParent:this}}},computed:{headerColumns:function(){return this.getTableHeaderColumns(new c["a"],m)}},mounted:function(){var e=Object(i["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,this.loadData();case 2:case"end":return e.stop()}}),e,this)})));function t(){return e.apply(this,arguments)}return t}(),methods:{loadData:function(){var e=Object(i["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,this.templateArticles.fetch();case 2:this.resizeFit();case 3:case"end":return e.stop()}}),e,this)})));function t(){return e.apply(this,arguments)}return t}()}},b=v,O=Object(h["a"])(b,r,a,!1,null,null,null);t["default"]=O.exports}}]);
//# sourceMappingURL=chunk-aa1dd696.7cb9a081.js.map