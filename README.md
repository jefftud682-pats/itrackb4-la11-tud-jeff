## Part G: Reflection

### 1. Why is route model binding important?

Route model binding allows Laravel to automatically retrieve the movie record using its ID. The model type hint and parameter name must match the route parameter `{movie}` so Laravel can correctly identify the record.

### 2. What happens when Delete is implemented as a link?

A normal link sends a GET request, while the destroy route requires a DELETE request. Clicking the link will not delete the movie because the HTTP method does not match the route.

### 3. Why are old() and fallback values important in an edit form?

The `old()` function preserves the values entered by the user when validation fails. Its second argument provides the existing movie value when there is no previous input, allowing the edit form to display the saved record details.