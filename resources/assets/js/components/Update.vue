<template>

    <div class="modal" :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Update {{ list.name }} Détails</p>
      <button class="delete" aria-label="close" @click='close'></button>
    </header>
    <section class="modal-card-body">
        <div class="field">
          <label class="label">Username</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" :class="{'is-danger':errors.name}" type="text" placeholder="Name" v-model="list.name">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
            <!-- <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span> -->
          </div>
                <small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
        </div>
        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" :class="{'is-danger':errors.email}" type="email" placeholder="Email" v-model="list.email">
            <span class="icon is-small is-left">
              <i class="fa fa-at"></i>
            </span>
            <!-- <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span> -->
          </div>
                <small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
        </div>
        <div class="field">
          <label class="label">Phone</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" :class="{'is-danger':errors.phone}" type="tel" placeholder="Your phone number" v-model="list.phone">
            <span class="icon is-small is-left">
              <i class="fa fa-mobile"></i>
            </span>
            <!-- <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span> -->
          </div>
                <small v-if="errors.phone" class="has-text-danger">{{ errors.phone[0] }}</small>
        </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="update">Update</button>
      <button class="button" @click='close'>Cancel</button>
    </footer>
  </div>
</div>

</template>

<script>
export default {
    props:['openmodal'],

    data(){
      return{
        list:{
        },
        errors:{

        }
      }
    },

    methods:{
        close(){
            this.$emit('closeRequest')
        },

        update(){

          axios.patch(`/phonebook/${this.list.id}`,this.$data.list).then((response) => this.close())

          .catch((error) => this.errors = error.response.data.errors)
        }
    }
}
</script>
