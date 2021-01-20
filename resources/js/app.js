require('./bootstrap');
import Vue from 'vue';
new Vue ({
    el: ('#app'),
    data: {
        bikes: [],
    },
    created() {
        axios.get('http://localhost:3000/api/bike')
            .then( response => {
                // handle success
                console.log(response.data);
                this.bikes = response.data;
            })
            .catch( error => {
                // handle error
                console.log(error);
            })
    }
})