options(useFancyQuotes = FALSE)

AppleTree <- hugin.domain()

add.node(AppleTree, "Sick", states = c("yes", "no"))
add.node(AppleTree, "Dry", states = c("yes", "no"))
add.node(AppleTree, "Loses", states = c("yes", "no"))

add.edge(AppleTree, "Loses", "Sick")
add.edge(AppleTree, "Loses", "Dry")

sick.table <- get.table(AppleTree, "Sick")
sick.table[, 2] <- c(0.1, 0.9)
set.table(AppleTree, "Sick", sick.table)

dry.table <- get.table(AppleTree, "Dry")
dry.table[, 2] <- c(0.1, 0.9)
set.table(AppleTree, "Dry", dry.table)

loses.table <- get.table(AppleTree, "Loses")
loses.table[, 4] <- c(0.95, 0.05, 0.85, 0.15, 0.90, 0.1, 0.02, 0.98)
set.table(AppleTree, "Loses", loses.table)

compile(AppleTree)
set.finding(AppleTree, "Loses", "yes")
propagate(AppleTree)

get.belief(AppleTree, "Sick")
get.belief(AppleTree, "Dry")


