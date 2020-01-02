 // Changing the defaults

 $(document).ready(function () {
     window.sr = ScrollReveal({
         // reset: true
     });
     sr.reveal('.anim_rws', {
         duration: 1000,
         origin: 'left',
         delay: 3500,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_req', {
         duration: 1000,
         origin: 'right',
         delay: 3500,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim', {
         duration: 1000,
         // origin: 'bottom',
         delay: 4500,
         rotate: {
             x: 200,
             // z: 200,
             // y: 180
         },
         // distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim-b3', {
         duration: 1000,
         origin: 'bottom',
         delay: 5200,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim-1', {
         duration: 4000,
         // origin: 'bottom',
         delay: 2500,
         rotate: {
             x: 180,
             // z: 200,
             // y: 180
         },
         // distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     // Customizing a reveal set
     sr.reveal('.anim_bottom', {
         duration: 1200,
         origin: 'bottom',
         // delay: 300,
         viewFactor: 0.9,
         distance: '500px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_left', {
         duration: 1500,
         origin: 'left',
         delay: 300,
         distance: '400px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_right', {
         duration: 1500,
         origin: 'right',
         delay: 300,
         distance: '400px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_first', {
         duration: 1000,
         origin: 'left',
         delay: 300,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_second', {
         duration: 1000,
         origin: 'left',
         delay: 800,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_third', {
         duration: 1000,
         origin: 'left',
         delay: 300,
         distance: '800px',
         easing: 'ease',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_blink_left', {
         duration: 1000,
         origin: 'left',
         delay: 300,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.a2', {
         duration: 1000,
         // origin: 'top',
         delay: 1700,
         opacity: 0,
         // distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_blink_bottom', {
         duration: 1000,
         origin: 'left',
         delay: 500,
         rotate: {
             x: 200,
             // z: 200,
             y: 200
         },
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_blink_res', {
         duration: 0,
         opacity: 0,
         delay: 1500,
         easing: 'ease',
         useDelay: 'onload'
     });
     sr.reveal('.anim_blink_res', {
         duration: 600,
         origin: 'bottom',
         opacity: 1,
         delay: 1500,
         distance: '800px',
         easing: 'ease',
         useDelay: 'onload'
     });

 });