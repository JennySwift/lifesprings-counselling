
// var App = Vue.component('app', {
//     data: function () {
//         return {
//
//         };
//     },
//     methods: {
//
//     },
//     ready: function () {
//
//     }
// });

new Vue({
   el: 'body',
   ready: function () {
      HelpersRepository.scrollbars();
      HelpersRepository.setHeights();
      $(window).on('resize', function () {
         HelpersRepository.setHeights();
      });
   }
});

// var router = new VueRouter({
//     hashbang: false
// });

// router.map({
    // '/': {
        // component: ,
        //subRoutes: {
        //    //default for if no id is specified
        //    '/': {
        //        component:
        //    },
        //    '/:id': {
        //        component:
        //    }
        //}
    // }
// });

// router.start(App, 'body');



