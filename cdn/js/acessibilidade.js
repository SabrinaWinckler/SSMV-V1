/*!
 * FUNÇÃO ALTO CONTRASTE v0.1
 * gustavosatheler@gmail.com
 *
 *
 * Data: 27/05/2017
 */

function acessibilidade(a){
if(a == "SIM"){
    $("html,head,title,base,link,meta,style,script,noscript,template,body,section,nav,article,aside,h1,h2,h3,h4,h5,h6,hgroup,header,footer,address,main,p,hr,pre,blockquote,ol,ul,li,dl,dt,dd,dd,figure,figcaption,div,a,em,strong,small,s,cite,q,dfn,abbr,data,time,code,var,samp,kbd,sub,sup,i,b,u,mark,ruby,rt,rp,bdi,bdo,span,br,wbr,ins,del,img,iframe,embed,object,param,object,video,audio,source,video,audio,track,video,audio,canvas,map,area,area,map,svg,math,table,caption,colgroup,col,tbody,thead,tfoot,tr,td,th,form,fieldset,legend,fieldset,label,input,button,select,datalist,optgroup,option,select,datalist,textarea,keygen,output,progress,meter,details,summary,details,command,menu").addClass("alto-contraste");
} else {
    if($("html").hasClass("alto-contraste")){
        $("html,head,title,base,link,meta,style,script,noscript,template,body,section,nav,article,aside,h1,h2,h3,h4,h5,h6,hgroup,header,footer,address,main,p,hr,pre,blockquote,ol,ul,li,dl,dt,dd,dd,figure,figcaption,div,a,em,strong,small,s,cite,q,dfn,abbr,data,time,code,var,samp,kbd,sub,sup,i,b,u,mark,ruby,rt,rp,bdi,bdo,span,br,wbr,ins,del,img,iframe,embed,object,param,object,video,audio,source,video,audio,track,video,audio,canvas,map,area,area,map,svg,math,table,caption,colgroup,col,tbody,thead,tfoot,tr,td,th,form,fieldset,legend,fieldset,label,input,button,select,datalist,optgroup,option,select,datalist,textarea,keygen,output,progress,meter,details,summary,details,command,menu").removeClass("alto-contraste");
        $.cookie("acessibilidade", "FALSE");
    } else {
        $("html,head,title,base,link,meta,style,script,noscript,template,body,section,nav,article,aside,h1,h2,h3,h4,h5,h6,hgroup,header,footer,address,main,p,hr,pre,blockquote,ol,ul,li,dl,dt,dd,dd,figure,figcaption,div,a,em,strong,small,s,cite,q,dfn,abbr,data,time,code,var,samp,kbd,sub,sup,i,b,u,mark,ruby,rt,rp,bdi,bdo,span,br,wbr,ins,del,img,iframe,embed,object,param,object,video,audio,source,video,audio,track,video,audio,canvas,map,area,area,map,svg,math,table,caption,colgroup,col,tbody,thead,tfoot,tr,td,th,form,fieldset,legend,fieldset,label,input,button,select,datalist,optgroup,option,select,datalist,textarea,keygen,output,progress,meter,details,summary,details,command,menu").addClass("alto-contraste");
        $.cookie("acessibilidade", "TRUE");
    }
    }
};