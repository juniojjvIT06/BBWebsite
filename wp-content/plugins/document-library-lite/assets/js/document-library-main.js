(()=>{var t;(t=jQuery)(document).ready((function(){let a=t(".document-library-table");const e=t("#wpadminbar"),n=["doc_categories"];a.each((function(){let a=t(this),i={responsive:!0,processing:!0};"undefined"!=typeof document_library&&document_library.langurl&&(i.language={url:document_library.langurl});let o=a.DataTable(i);a.on("page.dt",(function(){if(!1!==t(this).data("scroll-offset")){let a=t(this).parent().offset().top-t(this).data("scroll-offset");if(e.length){a-=e.outerHeight()||32}t("html,body").animate({scrollTop:a},300)}})),a.data("click-filter")&&a.on("click","a",(function(){let a=t(this),e=o.cell(a.closest("td").get(0)).index().column,i=o.column(e).header(),r=t(i).data("name");return-1===n.indexOf(r)||(o.search(a.text()).draw(),!1)}))})),t(document).on("click",".document-library-table a.dlw-lightbox",(function(a){a.preventDefault(),a.stopPropagation();const e=t(".pswp")[0],n=t(this).find("img");if(n.length<1)return;const i=[{src:n.attr("data-large_image"),w:n.attr("data-large_image_width"),h:n.attr("data-large_image_height"),title:n.attr("data-caption")&&n.attr("data-caption").length?n.attr("data-caption"):n.attr("title")}];return new PhotoSwipe(e,PhotoSwipeUI_Default,i,{index:0,shareEl:!1,closeOnScroll:!1,history:!1,hideAnimationDuration:0,showAnimationDuration:0}).init(),!1}))}))})();