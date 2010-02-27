delete.table <- function(domain, node, type = c("experience", "fading"))
{
  RHugin.check.args(domain, node, character(0), "delete.table")
  type <- match.arg(type)

  node.ptr <- .Call("RHugin_domain_get_node_by_name", domain, node,
                     PACKAGE = "RHugin")

  switch(type,
    experience = {
      has.expr.table <- .Call("RHugin_node_has_experience_table", node.ptr,
                               PACKAGE = "RHugin")

      if(has.expr.table) {
        table.ptr <- .Call("RHugin_node_get_experience_table", node.ptr,
                            PACKAGE = "RHugin")
        .Call("RHugin_table_delete", table.ptr, PACKAGE = "RHugin")
      }

      else
        warning(dQuote(node), " does not have an experience table")

      NULL
    },

    fading = {
      has.fading.table <- .Call("RHugin_node_has_fading_table", node.ptr,
                                 PACKAGE = "RHugin")

      if(has.fading.table) {
        table.ptr <- .Call("RHugin_node_get_fading_table", node.ptr,
                            PACKAGE = "RHugin")
        .Call("RHugin_table_delete", table.ptr, PACKAGE = "RHugin")
      }

      else
        warning(dQuote(node), " does not have a fading table")

      NULL
    }
  )

  invisible()
}


