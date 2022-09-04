<template>
    <lingallery :iid.sync="currentId" :width="width" :height="height" :items="items"/>
</template>
<script>
import Lingallery from 'lingallery';
export default {
    data() {
        return {
            width: 600,
            height: 400,
            items: [{
                src: 'https://picsum.photos/600/400/?image=0',
                thumbnail: 'https://picsum.photos/64/64/?image=0',
            },
                {
                    src: 'https://picsum.photos/600/400/?image=10',
                    thumbnail: 'https://picsum.photos/64/64/?image=10'
                },
    ]};
    },
    components: {
        Lingallery
    }
}
</script>
