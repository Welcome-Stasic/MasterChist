/*import {
    mapState,
    mapGetters,
    mapMutations,
    mapActions
} from 'vuex'
export default {
    name: 'UsersList',
    props: {
        styleObj: {
            type: Object,
        }
    },
    data() {
        return {
            modalOpened: false,
        }
    },
    componented: {
        ...mapState(['fetchingUsers', 'users']),
        ...mapGetters(['GET_REVERSED_USERS']),
    },
    methods: {
        ...mapMutations(['SET_FETCHING', 'SET_USERS']),
        ...mapActions(['FETCH_USERS']),
        loadUsers() {
            this.FETCH_USERS()
        },
        openModal() {
            this.modalOpened = true
        },
        closeModal() {
            this.modalOpened = false
        }
    },
    mounted() {
        this.loadUsers()
    }
}
Vue.createApp(App).mount('#app') */
const modal = document.getElementById('modal');
const btn = document.querySelector('.buttom--effect');
const closeBtn = document.getElementById('close');

btn.addEventListener('click', () => {
    modal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});

const form = document.getElementById('form');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const service = document.getElementById('service').value;
    const phone = document.getElementById('phone').value;
    console.log(name, service, phone);
    modal.style.display = 'none';
});
