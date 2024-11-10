import emailjs from '@emailjs/browser';
      
export default {
  methods: {
    sendEmail() {
      emailjs
        .sendForm('service_ouy8aq4', 'template_s2cz87r', this.$refs.form, {
          publicKey: '6ly8F3tTDCKSfbSSE',
        })
        .then(
          () => {
            console.log('SUCCESS!');
          },
          (error) => {
            console.log('FAILED...', error.text);
          },
        );
    },
  },
};
Vue.createApp(App).mount('#app')