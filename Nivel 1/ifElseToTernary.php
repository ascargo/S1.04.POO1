<?php
// ✅ 1. Age check — assign to variable
if ($age >= 18) {
    $status = "Adult";
} else {
    $status = "Minor";
}
// ternary:
$status = ($age >= 18 ? "Adult" : "Minor");
// ✅ Perfect — clear and idiomatic.

// ✅ 2. Score check — direct echo
if ($score >= 50) {
    echo "You passed!";
} else {
    echo "You failed.";
}
// ternary:
echo ($score >=50 ? "You passed!" : "You failed.");
// ✅ Spot-on — clean and correct.

//✅ 3. Salary check — message to echo
if ($salary > 6000) {
    $message = "Pays taxes";
} else {
    $message = "No taxes";
}
// ternary:
echo ($salary > 6000 ? "Pays taxes." : "No taxes.");
// ✅ All good — this is exactly the kind of readable one-liner ternary is great for.

// ✅ 4. Role check — boolean result
if ($role == "admin") {
    $canEdit = true;
} else {
    $canEdit = false;
}
// ternary:
$canEdit = ($role == "admin" ? true : false);
/* ✅ Correct, but here's an optional tip:

Since the ternary is returning true or false, you could write it even shorter: */
$canEdit = ($role == "admin"); // returns true or false directly
// Same result, cleaner and more readable.

// 5. Temperature check — inline echo + assignment
if ($temperature >= 30) {
    $advice = "Stay hydrated!";
} else {
    $advice = "Enjoy the weather!";
}
// ternary:
echo $advice = ($temperature >= 30 ? "Stay hydrated!" : "Enjoy the weather!");
/* ✅ This works, but here's a small suggestion:

This line is doing two things at once:

Assigning a value to $advice

Echoing it

While legal in PHP, it’s usually cleaner to separate them: */

$advice = ($temperature >= 30 ? "Stay hydrated!" : "Enjoy the weather!");
echo $advice;

// 💡 Why? It keeps your code easier to read, debug, and test.
?>