 <template>
  <div
    class="modal fade"
    id="exampleModalCenter"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <form @submit.prevent="deleteData">
          <div class="modal-header confirm-modal-header" style="background: #1b5e20;">
            <h6 class="modal-title" style="color: white;">Message</h6>
           <i data-dismiss="modal" class="fa fa-close confirm-q" aria-hidden="true"></i>
           
          </div>
          <div class="modal-body confirm-modal-body">
            <h6 class="modal-title">Are you sure?</h6>
          </div>
          <div class="modal-footer confirm-modal-footer">
            <button
              @click="deleteData(url)"
              type="submit"
              class="confirmBtn"
              style="text-align:center;"
              data-dismiss="modal"
            >Yes</button>
            <button type="button" class="confirmBtn-outline" data-dismiss="modal">No</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
import { EventBus } from "../../js/event-bus.js";
export default {
  props: {
    url: ""
  },
  data() {
    return {
      clickCount: 0
    };
  },  methods: {
    deleteData() {
      this.axios.delete(`/api/${this.url}`).then(response => {});
      this.clickCount++;
      EventBus.$emit("clicked", this.clickCount);
    }
  }
};
</script>




