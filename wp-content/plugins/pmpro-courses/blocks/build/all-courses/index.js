!function(){"use strict";var e=window.wp.blocks,o=window.wp.element,s=window.wp.i18n,t=window.wp.blockEditor,l=window.wp.components,r=JSON.parse('{"u2":"pmpro-courses/all-courses"}');(0,e.registerBlockType)(r.u2,{edit:function(e){let{attributes:r,setAttributes:n}=e;const{limit:p}=r,c=(0,t.useBlockProps)({className:"pmpro-block-element"});return[(0,o.createElement)(t.InspectorControls,null,(0,o.createElement)(l.PanelBody,null,(0,o.createElement)(l.TextControl,{label:(0,s.__)("Limit","pmpro-courses"),value:p,onChange:e=>n({limit:e}),help:(0,s.__)("How many courses should be displayed. Set the value to -1 to show all courses.","pmpro-courses")}))),(0,o.createElement)("div",c,(0,o.createElement)("span",{className:"pmpro-block-title"},(0,s.__)("Paid Memberships Pro Courses","pmpro-courses")),(0,o.createElement)("span",{className:"pmpro-block-subtitle"},(0,s.__)("All Courses","pmpro-courses")))]},save:()=>null})}();