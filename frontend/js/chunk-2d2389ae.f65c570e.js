(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d2389ae"],{ffa9:function(e,t,r){"use strict";r.r(t);var s=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"vx-row"},[r("div",{staticClass:"vx-col md:w-1/2 w-full mb-base"},[r("vx-card",{attrs:{title:e.userObject.name}},[e._l(e.userObject.fieldsSettings(),(function(t,s){return[e.isVisible(t)?r("div",{key:s,staticClass:"mb-5"},[r("h6",[e._v(e._s(e.$t(t.label))+":")]),r("p",[e._v(e._s(e.userObject[s]?e.userObject[s]:"/"))])]):e._e()]})),e.userObject.studyprogram?[r("div",{staticClass:"mb-5"},[r("h6",[e._v(e._s(e.$t("STUDY_PROGRAMS.TITLE_SINGLE"))+":")]),r("p",[e._v("\n            "+e._s(e.userObject.studyprogram.name)),e.can("view","StudyProgram")?r("vs-button",{staticClass:"inline-block mr-2 float-right",attrs:{size:"small",type:"border",icon:"remove_red_eye"},on:{click:function(t){return e.viewStudyProgram(e.userObject.studyprogram)}}}):e._e()],1)])]:e._e(),e._l(e.userObject.roles,(function(t,s){return[r("div",{key:s,staticClass:"mb-5"},[r("h6",[e._v(e._s(e.$t("ROLES.TITLE"))+":")]),r("p",[e._v(e._s(e.getRoleName(t)))])])]}))],2)],1),e.canEditUser(e.user)?r("div",{staticClass:"vx-col text-right w-full"},[r("vs-button",{on:{click:function(t){return e.edit()}}},[e._v(e._s(e.$t("GLOBALS.EDIT"))+" ")])],1):e._e()])},n=[],i=(r("7514"),r("96cf"),r("3b8d")),u=(r("c5f6"),r("ebd1")),a=r("18c6"),c=r("2bcd"),o={components:{VTextBox:a["a"],VSelectBox:c["a"]},props:{user:{type:Object,default:function(){return new u["a"]}},id:{type:[Number,String],required:!0}},data:function(){return{userObject:this.user}},mounted:function(){var e=Object(i["a"])(regeneratorRuntime.mark((function e(){var t,r=this;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:if(this.userObject.id){e.next=15;break}if(t=new u["b"],!this.isAdmin){e.next=7;break}return e.next=5,t.fetch();case 5:e.next=14;break;case 7:if(!this.isSchoolUser){e.next=12;break}return e.next=10,t.fetchInSchool();case 10:e.next=14;break;case 12:return e.next=14,t.fetchInOrganization();case 14:this.userObject=t.find((function(e){return e.username===r.id}));case 15:case"end":return e.stop()}}),e,this)})));function t(){return e.apply(this,arguments)}return t}(),methods:{isVisible:function(e){return"select"!==e.type&&(this.$acl.check("student")?e.showInViewStudent:e.showInView)},edit:function(){this.$router.push({name:"users-edit",params:{id:this.userObject.username,studyProgram:this.userObject}})},viewStudyProgram:function(e){this.$router.push({name:"study-programs-view",params:{id:e.id}})}}},l=o,d=r("2877"),b=Object(d["a"])(l,s,n,!1,null,null,null);t["default"]=b.exports}}]);
//# sourceMappingURL=chunk-2d2389ae.f65c570e.js.map