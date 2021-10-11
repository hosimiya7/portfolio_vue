<template>
  <div class="contact-wrapper flex">
    <div class="contact-heading">
      <ul>
        <li>contact</li>
      </ul>
    </div>
    <div class="contact-content">
      <p class="contact-text">
        制作のご依頼やご相談など、
        お気軽にご連絡ください。
      </p>
      <div class="form">
        <p>name</p>
        <input type="text" id="name" required />
        <p>e-mail</p>
        <input type="text" id="email" required/>
        <p>content</p>
        <textarea cols="30" rows="10" id="content" required></textarea>
        <input type="submit" class="button" v-on:click="sendMail()"/>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    sendMail() {
      window.axios
        .post("api/mail", {
          name: document.getElementById("name").value,
          email: document.getElementById("email").value,
          content: document.getElementById("content").value
        })
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>