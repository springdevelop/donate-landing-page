<template>
<div style="">
     <navigation></navigation>
     <div class="">
            <main role="main" class="py-4">
                 <custom-html position="top"></custom-html>
                 <!-- <founding></founding> -->
                 <custom-html position="mid"></custom-html>
                 <!-- <div class="section-donate">
                      <div class="container">
                         <donate></donate>
                      </div>

                 </div> -->
                 <custom-html position="bottom"></custom-html>
            </main>
          <page-footer class="text-center footer py-3"></page-footer>

    </div>
</div>
</template>
<script>
     import Navigation from '@/js/components/Navigation.vue'
     import Founding from '@/js/components/Founding.vue'
     import Donate from '@/js/components/Donate.vue'
     import PageFooter from '@/js/components/Footer.vue'
     import CustomHtml from '@/js/components/CustomHtml.vue'

     export default {
          components: {
               Navigation, Founding, Donate, PageFooter, CustomHtml
          },
     }
</script>
<style scoped>
.section-donate{
}
.footer{
     background-color:#F87401;
     color: #fff;
}
</style>