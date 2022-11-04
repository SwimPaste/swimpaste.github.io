local key = _G.Key
local check = "https://swimpaste.github.io/check.php?key=" .. key
if game:HttpGet(check) == "Whitelisted" then
print("ues")
else
print("no")
end
