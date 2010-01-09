get.subtype <- function(domain, nodes)
{
  RHugin.check.args(domain, nodes, character(0), "get.subtype")

  node.ptrs <- .Call("RHugin_domain_get_node_by_name", domain, nodes,
                      PACKAGE = "RHugin")

  .Call("RHugin_node_get_subtype", node.ptrs, PACKAGE = "RHugin")
}


