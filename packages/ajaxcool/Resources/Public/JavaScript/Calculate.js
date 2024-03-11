// require(["TYPO3/CMS/Core/Ajax/AjaxRequest"], function (AjaxRequest) {
//   // Generate a random number between 1 and 32
//   const randomNumber = Math.ceil(Math.random() * 32);
//   new AjaxRequest(TYPO3.settings.ajaxUrls.myextension_example_dosomething)
//     .withQueryArguments({ input: randomNumber })
//     .get()
//     .then(async function (response) {
//       const resolved = await response.resolve();
//       console.log(resolved.result);
//     });
// });

// const baseUrl = 'https://ajax-typo3-test3.ddev.site/';
// const inputNumber = 5;
// fetch(`${baseUrl}/ajaxcool/do-something?input=${inputNumber}`, {
//     method: 'GET',
//     headers: {
//         'Content-Type': 'application/json',
//     },
// })
// .then(response => {
//     if (!response.ok) {
//         throw new Error('Network response was not ok');
//     }
//     return response.json();
// })
// .then(data => console.log(data))
// .catch(error => console.error('Error:', error));

// let request = new AjaxRequest(
//   "https://ajax-typo3-test3.ddev.site/ajaxcool/do-something"
// );
// const qs = {
//   input: 5,
// };
// request = request.withQueryArguments(qs);
// let promise = request.get();

// promise
//   .then(async function (response) {
//     const responseText = await response.resolve();
//     console.log(responseText);
//   })

