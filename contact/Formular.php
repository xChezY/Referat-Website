<form action="https://formsubmit.co/Carlo.Niermann@iu-study.org" method="POST" class="mx-auto max-w-xl mt-6">
  <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
    <div>
      <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
      <div class="mt-2.5">
        <input type="text" id="first-name" name="first-name" placeholder="First Name" required
          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 outline outline-1 outline-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
      </div>
    </div>
    <div>
      <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
      <div class="mt-2.5">
        <input type="text" id="last-name" name="last-name" placeholder="Last Name" required
          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 outline outline-1 outline-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
      </div>
    </div>
    <div class="sm:col-span-2">
      <label for="email" class="block text-sm/6 font-semibold text-gray-900">Your Email</label>
      <div class="mt-2.5">
        <input type="email" id="email" name="email" placeholder="Your Email" required
          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 outline outline-1 outline-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
      </div>
    </div>
    <div class="sm:col-span-2">
      <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
      <div class="mt-2.5">
        <textarea id="message" name="message" rows="4" placeholder="Your Message"
          class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 outline outline-1 outline-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
      </div>
    </div>
  </div>
  <div class="mt-10">
    <button type="submit"
      class="rounded-md bg-primary-600 px-4 py-2 black shadow-sm hover:bg-primary-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-primary-600">
      Send Email
    </button>
  </div>
</form>
<script>
  (function () {
    emailjs.init("rqod-EBSEMNYRCQfu");
  })();

  function sendEmail() {
    const firstName = document.getElementById('first-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    const templateParams = {
      from_name: `${firstName} ${lastName}`,
      email: email,
      message: message,
    };

    emailjs.send("service_mw6qbmd", "template_vpxberp", templateParams)
      .then(function (response) {
        alert('Email sent successfully!');
      }, function (error) {
        console.error('FAILED...', error);
        alert('Failed to send email.');
      });
  }
</script>