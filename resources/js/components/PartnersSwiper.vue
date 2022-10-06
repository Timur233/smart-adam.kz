<template>
<swiper
    :slides-per-view="4.5"
    :space-between="40"
    :loop="true"
>
    <slot></slot>
</swiper>
</template>

<script>
    import { Navigation } from 'swiper';
    import { SwiperCore, Swiper, SwiperSlide } from 'swiper-vue2';

    SwiperCore.use([Navigation]);

    export default {
    components: {
      Swiper,
      SwiperSlide,
    },
  };
</script>
