<template>
    <yandex-map
        :coords="coords"
        :settings="settings"
        :scroll-zoom="false"
        :zoom="17"
        :controls="['zoomControl']"
    >
        <ymap-marker
            marker-id="123"
            :coords="coords"
            :icon="markerIcon"
        />
    </yandex-map>
</template>

<script>
    import { yandexMap, ymapMarker } from 'vue-yandex-maps';

    export default {
        name: 'yandex-map-el',
        components: { yandexMap, ymapMarker },
        data: () => ({
            coords: [43.25144299558402,76.96688161091748],
            settings: {
                apiKey: 'c931e95f-6835-4672-9786-8ec02a9db87a',
            },
            markerIcon: {
                layout: 'default#imageWithContent',
                imageHref: 'https://cms.abpx.kz/storage/uploads/2021/09/14/61406803490f0map-marker.svg',
                imageSize: [41, 56],
                imageOffset: [-41, -28],
                contentOffset: [0, 15],
                contentLayout: '<div style="background: red; width: 50px; color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            },

        })
    }
</script>
