!function(){function o(o,n,e,t){function l(o,n){return n>o?o:n}function c(){var m=Date.now(),d=l(1,(m-r)/n),s=e(d),a=s*(o-u)+u;document.body.scrollTop=a,document.documentElement.scrollTop=a,1>d?requestAnimationFrame(c):t&&t()}var r=Date.now(),u=document.body.scrollTop||document.documentElement.scrollTop||0;u!==o&&requestAnimationFrame(c)}var n={linear:function(o){return o}},e=null,t=Math.round(document.body.scrollTop||document.documentElement.scrollTop||0),l=0,c=window.scrollY,r=document.querySelectorAll("#hero img")[0];window.onscroll=function(){l=document.body.scrollTop||document.documentElement.scrollTop||0,l=c-l,t-=l;var o=t/2.4;0>o&&(o=0),r.style.transform="translateY("+o+"px)",c=document.body.scrollTop||document.documentElement.scrollTop||0}}();