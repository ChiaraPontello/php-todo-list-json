
const { createApp } = Vue;

createApp({
   
  data() {
    return {
      apiUrl: "server.php",
      arrayList: [],
      newList: "",
    };
  },
  methods: {
    addTask(){        
        const data= new FormData();
        data.append ("task", this.newTask);
        axios.post(this.apiUrl,data).then((response) => {
        this.arrayList = response.data;
        });
    },

    removeTask(index){
        const data= new FormData();
        data.append ("taskRemoved", index);
        axios.post(this.apiUrl,data).then((response) => {
        this.arrayList = response.data;
        });
    }
  },

  },
).mount("#app");