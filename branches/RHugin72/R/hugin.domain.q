hugin.domain <- function(graph, data)
{
  if(!missing(graph))
    stop("the graph argument is not supported in this release of RHugin")

  domain <- .Call("RHugin_new_domain", PACKAGE = "RHugin")
  oldClass(domain) <- "RHuginDomain"

  if(!missing(data) && is.data.frame(data)) {
    node.names <- names(data)
    if(length(Freq <- which("Freq" == node.names)))
      node.names <- node.names[-Freq]

    for(node in node.names) {
      switch(class(data[[node]])[1],
        "integer" = add.node(domain, name = node,
                             states = as.numeric(sort(unique(data[[node]])))),

        "numeric" = add.node(domain, name = node,
                             states = as.numeric(sort(unique(data[[node]])))),

        "logical" = add.node(domain, name = node, states = c(FALSE, TRUE)),

        {
          x <- as.factor(data[[node]])
          add.node(domain, name = node, states = levels(x))
        }
      )
    }
  }

  domain
}


 