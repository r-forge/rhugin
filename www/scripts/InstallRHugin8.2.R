InstallRHugin8.2 <- function(hugin = NULL)
{
  if(!require(tools))
    stop("the tools package could not be loaded")
  
  x64 <- ifelse(.Platform$r_arch == "x64", "-x64", "")

  #
  # 1) Check the HDE dll. If hugin is not specified, look for the HDE in
  #    %ProgramFiles%/Hugin Expert/...
  #

  if(is.null(hugin)) {
    HuginExpertDir <- file.path(Sys.getenv("ProgramFiles"), "Hugin Expert")
    hugin <- list.files(HuginExpertDir, full = TRUE)
    
    if(!(n.hugin <- length(hugin)))
      stop("No Hugin installations found")
    
    if(n.hugin > 1)
      stop("Multiple Hugin installations found")
  }

  hugin <- paste(strsplit(hugin, split = "\\", fixed = TRUE)[[1]],
                 collapse = .Platform$file.sep)
  
  hugin.version <- list.files(hugin, pattern = glob2rx("HDE*C"))
  hugin.version <- substr(hugin.version, 4, nchar(hugin.version) - 1)
  huginDll <- paste("hugin2-", hugin.version, "-vc10", x64, ".dll", sep = "")
  huginDllDir <- paste(hugin, "/HDE", hugin.version, "C/Lib/VC10/Release", sep = "")
 
  if(!file.exists(file.path(huginDllDir, huginDll)))
    stop(huginDll, " not found")

  #
  # 2) Customize the RHugin source package for this computer
  #

  # 2.1) Download and unpack RHugin in a temporary directory

  td <- paste(strsplit(tempdir(), split = "\\", fixed = TRUE)[[1]],
              collapse = .Platform$file.sep)

  u <- "http://rhugin.r-forge.r-project.org/src/contrib/RHugin_current.tar.gz"
  rhugin.src <- file.path(td, "RHugin_current.tar.gz")
  RHugin <- file.path(dirname(rhugin.src), "RHugin")
  if(!file.exists(rhugin.src))
    status <- download.file(u, destfile = rhugin.src)
  status <- untar(rhugin.src, exdir = td, compressed = "gzip")


  # 2.2) Copy the HDE dll to the temporary directory

  tmpHuginDllDir <- file.path(td, "huginDllDir")
  if(!dir.exists(tmpHuginDllDir))
    status <- dir.create(tmpHuginDllDir)

  tmpHuginDll <- file.path(tmpHuginDllDir, huginDll)
  if(!file.exists(tmpHuginDll))
    status <- file.copy(file.path(huginDllDir, huginDll), tmpHuginDll)


  # 2.3 Add Makevars.win to RHugin/src
  
  cppflags <- paste("PKG_CPPFLAGS=-DH_DOUBLE -I\"",
                    file.path(hugin, paste("HDE", hugin.version, "C", sep = ""), "Include"),
                    "\"", sep = "")

  libs <- paste("PKG_LIBS=-L\"",
                tmpHuginDllDir,
                "\" ",
                "-l",
                file_path_sans_ext(huginDll),
                sep = "")

  Makevars.win <- file.path(RHugin, "src", "Makevars.win")
  if(file.exists(Makevars.win))
    status <- file.remove(Makevars.win)
  status <- writeLines(c(cppflags, libs), con = Makevars.win)


  # 2.4 Change package type in DESCRIPTION

  DESCRIPTION <- file.path(RHugin, "DESCRIPTION")
  d <- readLines(DESCRIPTION)
  OS_type <- grep("OS_type", d)
  d[OS_type] <- "OS_type: windows"
  status <- file.remove(DESCRIPTION)
  status <- writeLines(d, DESCRIPTION)


  # 2.5 Add path to huginDll to .on.load

  onLoad <- file.path(RHugin, "R", "library.q")
  ol <- readLines(onLoad)
  i <- grep("HuginDll <- NULL", ol)[1]
  ol[i] <- paste("    HuginDll <- \"", file.path(huginDllDir, huginDll), "\"", sep = "")
  status <- file.remove(onLoad)
  status <- writeLines(ol, onLoad)
  
  #
  # 4) Install the RHugin package
  #
  
  status <- install.packages(RHugin, repos = NULL, type = "source",
                             INSTALL_opts = "--no-multiarch")
  
  
  
  
  
}







