set.states <- function(domain, node, states)
{
  RHugin.check.args(domain, node, character(0), "set.states")

  n.states <- length(states)

  node.ptr <- .Call("RHugin_domain_get_node_by_name", domain$pointer, node,
                     PACKAGE = "RHugin")
  RHugin.handle.error()

  if(!is.null(node.ptr)) {
    kind <- .Call("RHugin_node_get_kind", node.ptr, PACKAGE = "RHugin")
    subtype <- .Call("RHugin_node_get_subtype", node.ptr, PACKAGE = "RHugin")

    if(kind == "continuous") {
      warning(dQuote("set.states"), " has no effect on continuous nodes")
      return(invisible(NULL))
    }

    status <- .Call("RHugin_node_set_number_of_states", node.ptr,
                     as.integer(n.states), PACKAGE = "RHugin")
    RHugin.handle.error(status)

    status <- switch(subtype,
      "labeled" = .Call("RHugin_node_set_state_label", node.ptr,
                         as.integer(0:(n.states - 1)), as.character(states),
                         PACKAGE = "RHugin"),

      "numbered" = {
        states <- as.double(states)
        if(any(is.na(states)))
          stop("non numeric states supplied for numbered node")
        .Call("RHugin_node_set_state_value", node.ptr,
               as.integer(0:(n.states - 1)), states,
               PACKAGE = "RHugin")
      },

      "interval" = {
        states <- as.double(states)
        if(any(is.na(states)))
          stop("non numeric states supplied for interval node")
        .Call("RHugin_node_set_state_value", node.ptr,
               as.integer(0:(n.states - 1)), states,
               PACKAGE = "RHugin")
      }
    )
    RHugin.handle.error(status)
  }

  invisible(NULL)
}

